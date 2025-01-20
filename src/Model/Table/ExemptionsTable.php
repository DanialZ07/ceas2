<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Exemptions Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\FacultiesTable&\Cake\ORM\Association\BelongsTo $Faculties
 * @property \App\Model\Table\ProgramsTable&\Cake\ORM\Association\BelongsTo $Programs
 * @property \App\Model\Table\SemestersTable&\Cake\ORM\Association\BelongsTo $Semesters
 * @property \App\Model\Table\CampusesTable&\Cake\ORM\Association\BelongsTo $Campuses
 *
 * @method \App\Model\Entity\Exemption newEmptyEntity()
 * @method \App\Model\Entity\Exemption newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Exemption> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Exemption get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Exemption findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Exemption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Exemption> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Exemption|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Exemption saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Exemption>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Exemption>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Exemption>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Exemption> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Exemption>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Exemption>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Exemption>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Exemption> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExemptionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('exemptions');
        $this->setDisplayField('transcript');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Faculties', [
            'foreignKey' => 'faculty_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Semesters', [
            'foreignKey' => 'semester_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Campuses', [
            'foreignKey' => 'campus_id',
            'joinType' => 'INNER',
        ]);
		$this->addBehavior('AuditStash.AuditLog');

		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
				->add('search', 'Search.Like', [
					//'before' => true,
					//'after' => true,
					'fieldMode' => 'OR',
					'multiValue' => true,
					'multiValueSeparator' => '|',
					'comparison' => 'LIKE',
					'wildcardAny' => '*',
					'wildcardOne' => '?',
					'fields' => ['id'],
				]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('faculty_id')
            ->notEmptyString('faculty_id');

        $validator
            ->integer('program_id')
            ->notEmptyString('program_id');

        $validator
            ->integer('semester_id')
            ->notEmptyString('semester_id');

        $validator
            ->integer('campus_id')
            ->notEmptyString('campus_id');

        $validator
            ->integer('matrix')
            ->requirePresence('matrix', 'create')
            ->notEmptyString('matrix');

        $validator
            ->integer('ic_number')
            ->requirePresence('ic_number', 'create')
            ->notEmptyString('ic_number');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->allowEmptyFile('transcript')
            ->add('transcript',[
                'validExtension' => [
                    'rule' => ['extension', ['pdf']],
                    'message'=> ('Only PDF files are allowed')
                ]
            ]);

        $validator
            ->scalar('kod_kursus_dipohon_1')
            ->maxLength('kod_kursus_dipohon_1', 10)
            ->requirePresence('kod_kursus_dipohon_1', 'create')
            ->notEmptyString('kod_kursus_dipohon_1');

        $validator
            ->scalar('nama_kursus_dipohon_1')
            ->maxLength('nama_kursus_dipohon_1', 255)
            ->requirePresence('nama_kursus_dipohon_1', 'create')
            ->notEmptyString('nama_kursus_dipohon_1');

        $validator
            ->scalar('kod_terdahulu_1')
            ->maxLength('kod_terdahulu_1', 10)
            ->requirePresence('kod_terdahulu_1', 'create')
            ->notEmptyString('kod_terdahulu_1');

        $validator
            ->scalar('nama_kursus_terdahulu_1')
            ->maxLength('nama_kursus_terdahulu_1', 255)
            ->requirePresence('nama_kursus_terdahulu_1', 'create')
            ->notEmptyString('nama_kursus_terdahulu_1');

        $validator
            ->scalar('kod_kursus_dipohon_2')
            ->maxLength('kod_kursus_dipohon_2', 10)
            ->allowEmptyString('kod_kursus_dipohon_2');

        $validator
            ->scalar('nama_kursus_dipohon_2')
            ->maxLength('nama_kursus_dipohon_2', 255)
            ->allowEmptyString('nama_kursus_dipohon_2');

        $validator
            ->scalar('kod_terdahulu_2')
            ->maxLength('kod_terdahulu_2', 10)
            ->allowEmptyString('kod_terdahulu_2');

        $validator
            ->scalar('nama_kursus_terdahulu_2')
            ->maxLength('nama_kursus_terdahulu_2', 255)
            ->allowEmptyString('nama_kursus_terdahulu_2');

        $validator
            ->scalar('kod_kursus_dipohon_3')
            ->maxLength('kod_kursus_dipohon_3', 10)
            ->allowEmptyString('kod_kursus_dipohon_3');

        $validator
            ->scalar('nama_kursus_dipohon_3')
            ->maxLength('nama_kursus_dipohon_3', 255)
            ->allowEmptyString('nama_kursus_dipohon_3');

        $validator
            ->scalar('kod_terdahulu_3')
            ->maxLength('kod_terdahulu_3', 10)
            ->allowEmptyString('kod_terdahulu_3');

        $validator
            ->scalar('nama_kursus_terdahulu_3')
            ->maxLength('nama_kursus_terdahulu_3', 255)
            ->allowEmptyString('nama_kursus_terdahulu_3');

        $validator
            ->scalar('kod_kursus_dipohon_4')
            ->maxLength('kod_kursus_dipohon_4', 10)
            ->allowEmptyString('kod_kursus_dipohon_4');

        $validator
            ->scalar('nama_kursus_dipohon_4')
            ->maxLength('nama_kursus_dipohon_4', 255)
            ->allowEmptyString('nama_kursus_dipohon_4');

        $validator
            ->scalar('kod_terdahulu_4')
            ->maxLength('kod_terdahulu_4', 10)
            ->allowEmptyString('kod_terdahulu_4');

        $validator
            ->scalar('nama_kursus_terdahulu_4')
            ->maxLength('nama_kursus_terdahulu_4', 255)
            ->allowEmptyString('nama_kursus_terdahulu_4');

        $validator
            ->scalar('kod_kursus_dipohon_5')
            ->maxLength('kod_kursus_dipohon_5', 10)
            ->allowEmptyString('kod_kursus_dipohon_5');

        $validator
            ->scalar('nama_kursus_dipohon_5')
            ->maxLength('nama_kursus_dipohon_5', 255)
            ->allowEmptyString('nama_kursus_dipohon_5');

        $validator
            ->scalar('kod_terdahulu_5')
            ->maxLength('kod_terdahulu_5', 10)
            ->allowEmptyString('kod_terdahulu_5');

        $validator
            ->scalar('nama_kursus_terdahulu_5')
            ->maxLength('nama_kursus_terdahulu_5', 255)
            ->allowEmptyString('nama_kursus_terdahulu_5');

        $validator
            ->scalar('kod_kursus_dipohon_6')
            ->maxLength('kod_kursus_dipohon_6', 10)
            ->allowEmptyString('kod_kursus_dipohon_6');

        $validator
            ->scalar('nama_kursus_dipohon_6')
            ->maxLength('nama_kursus_dipohon_6', 255)
            ->allowEmptyString('nama_kursus_dipohon_6');

        $validator
            ->scalar('kod_terdahulu_6')
            ->maxLength('kod_terdahulu_6', 10)
            ->allowEmptyString('kod_terdahulu_6');

        $validator
            ->scalar('nama_kursus_terdahulu_6')
            ->maxLength('nama_kursus_terdahulu_6', 255)
            ->allowEmptyString('nama_kursus_terdahulu_6');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['faculty_id'], 'Faculties'), ['errorField' => 'faculty_id']);
        $rules->add($rules->existsIn(['program_id'], 'Programs'), ['errorField' => 'program_id']);
        $rules->add($rules->existsIn(['semester_id'], 'Semesters'), ['errorField' => 'semester_id']);
        $rules->add($rules->existsIn(['campus_id'], 'Campuses'), ['errorField' => 'campus_id']);

        return $rules;
    }
}

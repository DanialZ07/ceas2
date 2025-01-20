<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exemption Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $faculty_id
 * @property int $program_id
 * @property int $semester_id
 * @property int $campus_id
 * @property int $matrix
 * @property int $ic_number
 * @property string $address
 * @property int $phone
 * @property string|null $transcript
 * @property string|null $transcript_dir
 * @property string $kod_kursus_dipohon_1
 * @property string $nama_kursus_dipohon_1
 * @property string $kod_terdahulu_1
 * @property string $nama_kursus_terdahulu_1
 * @property string|null $kod_kursus_dipohon_2
 * @property string|null $nama_kursus_dipohon_2
 * @property string|null $kod_terdahulu_2
 * @property string|null $nama_kursus_terdahulu_2
 * @property string|null $kod_kursus_dipohon_3
 * @property string|null $nama_kursus_dipohon_3
 * @property string|null $kod_terdahulu_3
 * @property string|null $nama_kursus_terdahulu_3
 * @property string|null $kod_kursus_dipohon_4
 * @property string|null $nama_kursus_dipohon_4
 * @property string|null $kod_terdahulu_4
 * @property string|null $nama_kursus_terdahulu_4
 * @property string|null $kod_kursus_dipohon_5
 * @property string|null $nama_kursus_dipohon_5
 * @property string|null $kod_terdahulu_5
 * @property string|null $nama_kursus_terdahulu_5
 * @property string|null $kod_kursus_dipohon_6
 * @property string|null $nama_kursus_dipohon_6
 * @property string|null $kod_terdahulu_6
 * @property string|null $nama_kursus_terdahulu_6
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\Semester $semester
 * @property \App\Model\Entity\Campus $campus
 */
class Exemption extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'faculty_id' => true,
        'program_id' => true,
        'semester_id' => true,
        'campus_id' => true,
        'matrix' => true,
        'ic_number' => true,
        'address' => true,
        'phone' => true,
        'transcript' => true,
        'transcript_dir' => true,
        'kod_kursus_dipohon_1' => true,
        'nama_kursus_dipohon_1' => true,
        'kod_terdahulu_1' => true,
        'nama_kursus_terdahulu_1' => true,
        'kod_kursus_dipohon_2' => true,
        'nama_kursus_dipohon_2' => true,
        'kod_terdahulu_2' => true,
        'nama_kursus_terdahulu_2' => true,
        'kod_kursus_dipohon_3' => true,
        'nama_kursus_dipohon_3' => true,
        'kod_terdahulu_3' => true,
        'nama_kursus_terdahulu_3' => true,
        'kod_kursus_dipohon_4' => true,
        'nama_kursus_dipohon_4' => true,
        'kod_terdahulu_4' => true,
        'nama_kursus_terdahulu_4' => true,
        'kod_kursus_dipohon_5' => true,
        'nama_kursus_dipohon_5' => true,
        'kod_terdahulu_5' => true,
        'nama_kursus_terdahulu_5' => true,
        'kod_kursus_dipohon_6' => true,
        'nama_kursus_dipohon_6' => true,
        'kod_terdahulu_6' => true,
        'nama_kursus_terdahulu_6' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'faculty' => true,
        'program' => true,
        'semester' => true,
        'campus' => true,
    ];
}

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exemption $exemption
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $faculties
 * @var string[]|\Cake\Collection\CollectionInterface $programs
 * @var string[]|\Cake\Collection\CollectionInterface $semesters
 * @var string[]|\Cake\Collection\CollectionInterface $campuses
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exemption->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exemption->id), 'class' => 'dropdown-item', 'escapeTitle' => false]
            ) ?>
            <?= $this->Html->link(__('List Exemptions'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
				</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($exemption) ?>
            <fieldset>
                <legend><?= __('Edit Exemption') ?></legend>
                
                    <?php echo $this->Form->control('user_id', ['options' => $users]); ?>
                    <?php echo $this->Form->control('faculty_id', ['options' => $faculties]); ?>
                    <?php echo $this->Form->control('program_id', ['options' => $programs]); ?>
                    <?php echo $this->Form->control('semester_id', ['options' => $semesters]); ?>
                    <?php echo $this->Form->control('campus_id', ['options' => $campuses]); ?>
                    <?php echo $this->Form->control('matrix'); ?>
                    <?php echo $this->Form->control('ic_number'); ?>
                    <?php echo $this->Form->control('address'); ?>
                    <?php echo $this->Form->control('phone'); ?>
                    <?php echo $this->Form->control('transcript'); ?>
                    <?php echo $this->Form->control('transcript_dir'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_1'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_1'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_1'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_1'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_2'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_2'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_2'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_2'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_3'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_3'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_3'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_3'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_4'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_4'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_4'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_4'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_5'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_5'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_5'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_5'); ?>
                    <?php echo $this->Form->control('kod_kursus_dipohon_6'); ?>
                    <?php echo $this->Form->control('nama_kursus_dipohon_6'); ?>
                    <?php echo $this->Form->control('kod_terdahulu_6'); ?>
                    <?php echo $this->Form->control('nama_kursus_terdahulu_6'); ?>
                    <?php echo $this->Form->control('status'); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>
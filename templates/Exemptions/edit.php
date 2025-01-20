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

    <div class="card-title mb-0 mt-3">Personal Details</div>
    <div class="tricolor_line mb-3"></div>

            <?= $this->Form->create($exemption) ?>
            <fieldset>
                
            <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('faculty_id', ['options' => $faculties,
                    'empty' => 'Select Faculty', 
                    'class'=> 'form-select']); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('program_id', ['options' => $programs, 
                    'empty' => 'Select Program', 
                    'class'=> 'form-select']); ?></div>
                    
                    <div class="col-md-6"><?php echo $this->Form->control('campus_id', ['options' => $campuses, 
                    'empty' => 'Select Campus',
                    'class'=> 'form-select']); ?></div>
                    <div class="col-md-2"><?php echo $this->Form->control('matrix'); ?></div>
                    <div class="col-md-2"><?php echo $this->Form->control('ic_number'); ?></div>
                    <div class="col-md-2"> <?php echo $this->Form->control('phone'); ?></div>
                    <div class="col-md-4"><?php echo $this->Form->control('semester_id', ['options' => $semesters, 
                    'empty' => 'Select Semester',
                    'class'=> 'form-select']); ?></div>
                    <div class="col-md-4">
                    <?= $this->Form->control('address', [
                    'label' => 'Address',
                    'class' => 'form-control',
                    'placeholder' => 'Enter your address',
                    ]); ?>
                    </div>
            </div>

                    <div class="card-title mb-0 mt-3">Kursus Pertama</div>
                    <div class="tricolor_line mb-4"></div>

                <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_1'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_1'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_1'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_terdahulu_1'); ?></div>
            </div>
                    

                    <div class="card-title mb-0 mt-3">Kursus Kedua</div>
                    <div class="tricolor_line mb-4"></div>

                <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_2'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_2'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_2'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_terdahulu_2'); ?></div>
                </div>


                    <div class="card-title mb-0 mt-3">Kursus Ketiga</div>
                    <div class="tricolor_line mb-4"></div>
                <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_3'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_3'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_3'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_terdahulu_3'); ?></div>
                </div>

                    <div class="card-title mb-0 mt-3">Kursus Keempat</div>
                    <div class="tricolor_line mb-4"></div>

                    <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_4'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_4'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_4'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_terdahulu_4'); ?></div>
                </div>
                    

                    <div class="card-title mb-0 mt-3">Kursus Kelima</div>
                    <div class="tricolor_line mb-4"></div>

                <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_5'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_5'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_5'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_terdahulu_5'); ?></div>
                </div>

                    <div class="card-title mb-0 mt-3">Kursus Keenam</div>
                    <div class="tricolor_line mb-4"></div>

                <div class="row">
                    <div class="col-md-6"><?php echo $this->Form->control('kod_kursus_dipohon_6'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('nama_kursus_dipohon_6'); ?></div>
                    <div class="col-md-6"><?php echo $this->Form->control('kod_terdahulu_6'); ?></div>
                    <div class="col-md-6"> <?php echo $this->Form->control('nama_kursus_terdahulu_6'); ?></div>
                </div>

                    <div class="card-title mb-0 mt-3">Mini Transcript</div>
                    <div class="tricolor_line mb-4"></div>
                    
                    <div class="col-md-4"><label>Upload Mini Transcript</label><?php echo $this->Form->control('transcript', ['type'=> 'file','label' => false]); ?></div>
                    <?php echo $this->Form->control('status'); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>
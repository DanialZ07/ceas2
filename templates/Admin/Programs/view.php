<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
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
							<li><?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($program->name) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($program->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($program->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($program->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($program->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($program->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($program->modified) ?></td>
                </tr>
            </table>
            </div>

			</div>
		</div>
		

            
            

            <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <h4><?= __('Related Exemptions') ?></h4>
                <?php if (!empty($program->exemptions)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Faculty Id') ?></th>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Campus Id') ?></th>
                            <th><?= __('Matrix') ?></th>
                            <th><?= __('Ic Number') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Transcript') ?></th>
                            <th><?= __('Transcript Dir') ?></th>
                            <th><?= __('Kod Kursus Dipohon 1') ?></th>
                            <th><?= __('Nama Kursus Dipohon 1') ?></th>
                            <th><?= __('Kod Terdahulu 1') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 1') ?></th>
                            <th><?= __('Kod Kursus Dipohon 2') ?></th>
                            <th><?= __('Nama Kursus Dipohon 2') ?></th>
                            <th><?= __('Kod Terdahulu 2') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 2') ?></th>
                            <th><?= __('Kod Kursus Dipohon 3') ?></th>
                            <th><?= __('Nama Kursus Dipohon 3') ?></th>
                            <th><?= __('Kod Terdahulu 3') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 3') ?></th>
                            <th><?= __('Kod Kursus Dipohon 4') ?></th>
                            <th><?= __('Nama Kursus Dipohon 4') ?></th>
                            <th><?= __('Kod Terdahulu 4') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 4') ?></th>
                            <th><?= __('Kod Kursus Dipohon 5') ?></th>
                            <th><?= __('Nama Kursus Dipohon 5') ?></th>
                            <th><?= __('Kod Terdahulu 5') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 5') ?></th>
                            <th><?= __('Kod Kursus Dipohon 6') ?></th>
                            <th><?= __('Nama Kursus Dipohon 6') ?></th>
                            <th><?= __('Kod Terdahulu 6') ?></th>
                            <th><?= __('Nama Kursus Terdahulu 6') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($program->exemptions as $exemptions) : ?>
                        <tr>
                            <td><?= h($exemptions->id) ?></td>
                            <td><?= h($exemptions->user_id) ?></td>
                            <td><?= h($exemptions->faculty_id) ?></td>
                            <td><?= h($exemptions->program_id) ?></td>
                            <td><?= h($exemptions->semester_id) ?></td>
                            <td><?= h($exemptions->campus_id) ?></td>
                            <td><?= h($exemptions->matrix) ?></td>
                            <td><?= h($exemptions->ic_number) ?></td>
                            <td><?= h($exemptions->address) ?></td>
                            <td><?= h($exemptions->phone) ?></td>
                            <td><?= h($exemptions->transcript) ?></td>
                            <td><?= h($exemptions->transcript_dir) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_1) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_1) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_1) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_1) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_2) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_2) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_2) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_2) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_3) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_3) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_3) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_3) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_4) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_4) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_4) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_4) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_5) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_5) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_5) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_5) ?></td>
                            <td><?= h($exemptions->kod_kursus_dipohon_6) ?></td>
                            <td><?= h($exemptions->nama_kursus_dipohon_6) ?></td>
                            <td><?= h($exemptions->kod_terdahulu_6) ?></td>
                            <td><?= h($exemptions->nama_kursus_terdahulu_6) ?></td>
                            <td><?= h($exemptions->status) ?></td>
                            <td><?= h($exemptions->created) ?></td>
                            <td><?= h($exemptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Exemptions', 'action' => 'view', $exemptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Exemptions', 'action' => 'edit', $exemptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exemptions', 'action' => 'delete', $exemptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exemptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>

		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>





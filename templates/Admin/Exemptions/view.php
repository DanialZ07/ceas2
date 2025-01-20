<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exemption $exemption
 */
?>
<div class="container my-5">
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
							<li><?= $this->Html->link(__('Edit Exemption'), ['action' => 'edit', $exemption->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Exemption'), ['action' => 'delete', $exemption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exemption->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Exemptions'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Exemption'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>

    <!-- Header Section -->
     <!--/Header-->

<div class="row">
	<div class="col-md-15">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
           
<style>
    .top {
        width: 100%;
        margin: auto;
    }
    .one {
        width:70%;
        height: 25px;
        background-color: #292983;
        float:left;
    }
    .two {
        margin-left: 15%;
        height: 25px;
        background: #912891;
    }

    .capital {
        text-transform: uppercase;
    }

    .justify {
        text-align: justify;
    }
</style>

<section class="top">
    <div class="one"></div>
    <div class="two"></div>
</section>
<br/>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="text-primary"><?= __('Borang PC - Permohonan Pengecualian Kredit') ?></h1>
            <p class="text-muted"><?= __('UiTM/iCEPS/JPJJ/PC/19') ?></p>
        </div>
        <div class="col-md-4 text-end">
        <?php echo $this->Html->image('../img/surat/iCEPS.png',['width'=>'400px']) ?>
        </div>
    </div>
    <hr />

    <!-- Student Information Section -->
    <h3 class="text-primary mb-3"><?= __('Maklumat Pelajar') ?></h3>
<div class="row">
    <!-- Left Table -->
<div class="col-md-6">
    <table class="table table-bordered table-sm capital table_transparent">
        <tbody>
            <tr>
                <th><?= __('Nama Pelajar') ?></th>
                <td><?= h($exemption->user->fullname ?? 'N/A') ?></td>
            </tr>
            <tr>
                <th><?= __('No. Pelajar') ?></th>
                <td><?= h($exemption->matrix ?? 'N/A') ?></td>
            </tr>
            <tr>
                <th><?= __('No. Telefon') ?></th>
                <td><?= h($exemption->phone ?? 'N/A') ?></td>
            </tr>
            <tr>
                <th><?= __('No. Kad Pengenalan') ?></th>
                <td><?= h($exemption->ic_number ?? 'N/A') ?></td>
            </tr>
            <tr class="address-cell">
                <th><?= __('Alamat Surat Menyurat') ?></th>
                <td><?= $this->Text->autoParagraph(h($exemption->address ?? 'N/A')) ?></td>
            </tr>
        </tbody>
    </table>
</div>

    <!-- Right Table -->
    <div class="col-md-6">
        <table class="table table-bordered table-sm capital table_transparent">
            <tbody>
                <tr>
                    <th><?= __('Fakulti') ?></th>
                    <td><?= h($exemption->faculty->name ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th><?= __('Kod Program') ?></th>
                    <td><?= h($exemption->program->code ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester') ?></th>
                    <td><?= h($exemption->semester->name ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th><?= __('IPT Terdahulu') ?></th>
                    <td><?= h($exemption->campus->name ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $this->Text->autoParagraph(h($exemption->user->email ?? 'N/A')) ?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<style>
    .top {
        width: 100%;
        margin: auto;
    }
    .one {
        width:70%;
        height: 25px;
        background-color: #292983;
        float:left;
    }
    .two {
        margin-left: 15%;
        height: 25px;
        background: #912891;
    }

    /* Adjust the height of table rows to keep them consistent */
    .table td, .table th {
        vertical-align: middle;
        height: 40px; /* Adjust the height of rows */
    }

    /* Specifically for Address cell */
    .address-cell {
        height: 40px;
        justify-content: center;
    }
</style>

    <!-- Course Information Section -->
<h3 class="text-primary mt-3 mb-3"><?= __('Maklumat Kursus Yang Dipohon') ?></h3>
<table class="table table-bordered table-sm capital table_transparent">
    <thead>
        <tr>
            <th><?= __('Bil.') ?></th>
            <th><?= __('Kod Kursus Dipohon') ?></th>
            <th><?= __('Nama Kursus Dipohon') ?></th>
            <th><?= __('Kod Terdahulu') ?></th>
            <th><?= __('Nama Kursus Terdahulu') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= h($exemption->{'kod_kursus_dipohon_' . $i} ?? '-') ?></td>
                <td><?= h($exemption->{'nama_kursus_dipohon_' . $i} ?? '-') ?></td>
                <td><?= h($exemption->{'kod_terdahulu_' . $i} ?? '-') ?></td>
                <td><?= h($exemption->{'nama_kursus_terdahulu_' . $i} ?? '-') ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>

    <!-- Declaration Section -->
    <div class="mt-5">
        <p class="fw-bold"><?= __('Saya mengaku bahawa keterangan yang diberi dalam borang ini adalah betul dan benar.') ?></p>
        <p><?= __('Tandatangan Pelajar: _____________________________') ?></p> 
        <p><?= __('Tarikh: ') ?><?php echo date('d-m-Y'); ?></p>
    </div>

    <!-- Footer Section -->
    <hr />
    <p class="text-muted text-center"><?= __('Keputusan dibuat oleh Jawatankuasa Akademik Fakulti / Jawatankuasa Akademik Negeri UiTM / Jawatankuasa Akademik iCEPS.') ?></p>
    <p class="text-center"><?= __('DILULUSKAN / TIDAK DILULUSKAN') ?></p>
    <p class="text-center"><?= __('Tandatangan Dekan / Rektor / Ketua Eksekutif: _____________________________') ?></p>

    <br /><br />
<?php if ($exemption->status == 0) {
    echo '<strong class="text-danger">[Under Review Process]</strong>';
} elseif ($exemption->status == 1) {
    echo 'Jabatan Hal Ehwal Akademik <br />';
    echo 'Universiti Teknologi MARA <br />';
    echo '<strong>COMPUTER PRINTING. NO SIGNATURE NEEDED</strong>';
 } else
    echo 'Rejected';
?>

<style>
    .bottom-right {
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>
</div>
</div>


<div class="col-md-4">
        <div class="card bg-body-tertiary border-0 shadow rounded-0">
            <div class="card-body">

            <div class="card-title mb-0">Exemption Data</div>
            <div class="tricolor_line mb-4"></div>

            <table class="table table-sm table-hover">
                <tr>
                    <td>Exemption Date</td>
                    <td><?php echo date('M d, Y (h:i A)', strtotime($exemption->created)); ?></td>
                </tr>
                <tr>
                    <td>Approval Date</td>
                    <td><?php echo date('M d, Y (h:i A)', strtotime($exemption->modified)); ?></td>
                </tr>
                <tr>
                    <td>Exemption Status</td>
                    <td>
                    <?php if ($exemption->approval_status == 0){
							echo '<span class="badge bg-warning">Pending</span>';
						}elseif ($exemption->approval_status == 1){
							echo '<span class="badge bg-success">Approved</span>';
						}elseif ($exemption->approval_status == 2){
							echo '<span class="badge bg-danger">Rejected</span>';
						}else
							echo '<span class="badge bg-danger">Error</span>';
						?>
                    </td>
                </tr>
            </table>

            <?php echo $this->Html->link(('Download PDF'),['action'=>'pdf', $exemption->id], ['class' => 'btn btn-sm btn-outline-primary', 'escapeTitle' => false]); ?>
        </div>
      </div>
	</div>
</br>





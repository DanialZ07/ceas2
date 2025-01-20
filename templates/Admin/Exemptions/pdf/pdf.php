<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exemption</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 15px;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 9pt;
            margin: 0;
            padding: 0;
        }

        .top {
            width: 100%;
            margin: auto;
        }

        .one {
            width: 70%;
            height: 25px;
            background-color: #292983;
            float: left;
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

        .table {
            width: 48%;
            border-collapse: collapse;
            float: left;
            margin-right: 10px;
            font-size: 9pt;
        }

        th, td {
            padding: 5px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .clear {
            clear: both;
        }

        h1, h3 {
            margin-top: 5px;
            margin-bottom: 5px;
            font-size: 12pt;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            position: fixed;
            bottom: 15px;
            left: 0;
            right: 0;
        }

        .footer p {
            margin: 0;
        }

        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
            margin-right: 15px;
            margin-bottom: 15px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }



        .top-right {
            text-align: right;
        }

        .status-message {
            font-weight: bold;
        }

        .status-pending {
            color: orange;
        }

        .status-approved {
            color: green;
        }

        .status-rejected {
            color: red;
        }
    </style>
</head>

<body>
<section class="top">
    <div class="one"></div>
    <div class="two"></div>
</section>

<div>
    <!-- Text Section aligned to the left -->
    <div>
        <h1 class="text-primary"><?= __('Borang PC - Permohonan Pengecualian Kredit') ?></h1>
        <p class="text-muted"><?= __('UiTM/iCEPS/JPJJ/PC/19') ?></p>
    </div>

    <!-- Image Section aligned to the right -->
    <div>
        <?php echo $this->Html->image('../img/surat/iCEPS.png', ['width' => '200px', 'fullBase' => true]) ?>
    </div>
</div>


<hr />

<!-- Student Information Section -->
<h3 class="text-primary mb-3"><?= __('Maklumat Pelajar') ?></h3>
<div>
    <table class="table table-bordered table-sm capital">
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

    <table class="table table-bordered table-sm capital">
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

<div class="clear"></div>

<br />
<!-- Course Information Section -->
<h3 class="text-primary mt-3 mb-3"><?= __('Maklumat Kursus Yang Dipohon') ?></h3>
<table class="table table-bordered table-sm capital" style="width: 100%;"> <!-- Set table width to 100% -->
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

<!-- Clear the float after the tables -->
<div style="clear: both;"></div>

<!-- Declaration Section -->
<div class="mt-5">
    <p class="fw-bold"><?= __('Saya mengaku bahawa keterangan yang diberi dalam borang ini adalah betul dan benar.') ?></p>
    <p><?= __('Tandatangan Pelajar: _____________________________') ?></p> 
    <p><?= __('Tarikh: ') ?><?php echo date('d-m-Y'); ?></p>
</div>

<!-- Second Horizontal Rule before Keputusan Section -->
<hr />

<!-- Keputusan Section -->
<div class="footer">
    <p class="text-muted"><?= __('Keputusan dibuat oleh Jawatankuasa Akademik Fakulti / Jawatankuasa Akademik Negeri UiTM / Jawatankuasa Akademik iCEPS.') ?></p>
    <p><?= __('DILULUSKAN / TIDAK DILULUSKAN') ?></p>
    <p><?= __('Tandatangan Dekan / Rektor / Ketua Eksekutif: _____________________________') ?></p>
</div>

<!-- Status Message Section -->
<div class="status-message">
    <?php if ($exemption->status == 0): ?>
        <span class="status-pending"><?= __('[Under Review Process]') ?></span>
    <?php elseif ($exemption->status == 1): ?>
        <span class="status-approved"><?= __('DILULUSKAN - Tiada Tanda Tangan Diperlukan') ?></span>
    <?php else: ?>
        <span class="status-rejected"><?= __('Rejected') ?></span>
    <?php endif; ?>
</div>
</body>
</html>

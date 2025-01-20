<?php
echo $this->Html->script('qr-code-styling-1-5-0.min.js');
echo $this->Html->css('animate.min');
echo $this->Html->css('jquery.CalendarHeatmap');
echo $this->Html->script('moment.min.js');
echo $this->Html->script('jquery.CalendarHeatmap.min.js');
echo $this->Html->script('https://cdn.jsdelivr.net/npm/apexcharts');
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.css" integrity="sha256-iwSnUqgAndMlZnwFWAAzto9R/6Un2RBguZEITMb0Olk=" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
	</div>
	<div class="col-2 text-end">

		<div class="dropdown mx-3 mt-2">
			<a class="btn p-0 border-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-bars text-primary"></i>
			</a>
			<ul class="dropdown-menu">
				<li><?= $this->Html->link(__('<i class="fa-solid fa-arrow-right-from-bracket"></i> Logout'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
			</ul>
		</div>

	</div>
</div>

<div class="horizontal-tabs border-bottom my-4">
	<?= $this->Html->link(__('Dashboard'), ['controller' => 'Dashboards', 'action' => 'index', 'prefix' => false], ['class' => 'topMenu active', 'escape' => false]) ?>
	<?= $this->Html->link(__('Contacts'), ['prefix' => 'Admin', 'controller' => 'Contacts', 'action' => 'index'], ['class' => 'topMenu', 'escape' => false]) ?>
	<?= $this->Html->link(__('Exemptions'), ['prefix' => 'Admin', 'controller' => 'Exemptions', 'action' => 'index'], ['class' => 'topMenu', 'escape' => false]) ?>
	<?= $this->Html->link(__('FAQ'), ['prefix' => 'Admin', 'controller' => 'Faqs', 'action' => 'index'], ['class' => 'topMenu', 'escape' => false]) ?>
</div>

<?php
    // PHP code for dynamic content can be placed here
    $pageTitle = "Welcome to UiTM Credit Exemption Application System";
    $description = "This system is for UiTM Puncak Perdana to apply credit exemption efficiently, streamlining the approval process.";
    $features = [
        "Create, Read, Update, Delete (CRUD) Operations",
        "Search Functionality",
        "Report Generation",
        "Authentication and User Role Management",
        "Contact Management",
        "FAQ Management",
        "System Configuration"
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .tricolor_line {
            height: 4px;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            margin-bottom: 20px;
        }
        .feature-list {
            list-style-type: none;
            padding-left: 0;
        }
        .feature-list li {
            padding: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Header Section -->
        <header class="text-center my-5">
            <h1><?php echo $pageTitle; ?></h1>
            <p class="lead text-muted"><?php echo $description; ?></p>
        </header>

        <!-- Main Content Section -->
        <div class="row">

            <!-- About Section -->
           <div class="col-md-15">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">About the System</h5>
            <div class="tricolor_line"></div>
            <p>The UiTM Credit Exemption Application System is designed to assist UiTM students in applying for credit exemptions in a more efficient and organized manner. Students can easily submit their applications through the system, eliminating the need for paper-based forms or in-person visits to administrative offices. The system provides a streamlined process, ensuring that students can request exemptions for courses or credits that they believe should be waived based on prior learning, work experience, or other criteria.</p>
            <p>With this system, students are able to track the status of their credit exemption applications in real-time. They will receive notifications about the approval or rejection of their requests and can follow up if necessary. The system helps reduce delays and provides transparency throughout the process, giving students confidence that their applications are being handled efficiently and fairly.</p>
            <p>In addition, the system enables administrators to manage and process exemption requests easily, ensuring that students' applications are reviewed promptly. By automating administrative tasks, the system reduces the administrative workload, allowing staff to focus on other important tasks. Ultimately, the UiTM Credit Exemption Application System improves the overall experience for both students and administrators, making the credit exemption process smoother and faster.</p>
        </div>
    </div>
</div>
<style>
@media (prefers-color-scheme: dark) {
    body {
        background: url('<?= $this->Url->image("surat/background.jpg") ?>') no-repeat center center fixed;
        background-size: cover;
        color: #e9ecef;
        position: relative;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Black color with 50% opacity */
        z-index: -1; /* Ensure the layer is behind the content */
    }
}
</style>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</div>
</div>
</body>

</html>

								
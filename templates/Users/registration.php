<?php
echo $this->Html->css('select2/css/select2.css');
echo $this->Html->script('select2/js/select2.full.min.js');
//echo $this->Html->css('https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css');
//echo $this->Html->script('https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js');
//echo $this->Html->script('https://unpkg.com/feather-icons'); 
?>

<!--Header-->
<div class="row text-body-secondary">
	<div class="col-12">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
</div>
<div class="line mb-4"></div>

<div class="row mt-3">
	<div class="col-md-9">
		<div class="card bg-body-tertiary border-0 shadow-lg mb-4 rounded-lg">
			<div class="card-body p-4">
				<?php echo $this->Form->create($user, ['type' => 'file', 'novalidate' => true]); ?>
				<fieldset>

					<div class="row">
						<div class="col">
							<?php echo $this->Form->control('fullname', ['required' => false, 'class' => 'form-control form-control-lg shadow-sm']); ?>
						</div>
						<div class="col">
							<?php echo $this->Form->control('email', ['required' => false, 'class' => 'form-control form-control-lg shadow-sm']); ?>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<?php echo $this->Form->control('password', ['required' => false, 'class' => 'form-control form-control-lg shadow-sm']); ?>
						</div>
						<div class="col">
							<?php echo $this->Form->control('cpassword', ['class' => 'form-control form-control-lg shadow-sm', 'type' => 'password', 'label' => 'Confirm Password', 'required' => false]); ?>
						</div>
					</div>

					<?php echo $this->Form->control('avatar', ['type' => 'file', 'required' => false, 'class' => 'form-control form-control-lg shadow-sm', 'label' => 'Profile Image']); ?>

					<div class="form-check">
						<?php echo $this->Form->checkbox('terms', ['value' => 'terms', 'class' => 'form-check-input shadow', 'id' => 'terms']); ?>
						&nbsp;<label for="terms" class="form-check-label">I agree to the registration term &amp; conditions</label>
					</div>

				</fieldset>
				<div class="text-end">
					<?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-light rounded-pill shadow-sm px-4']); ?>
					<?= $this->Form->button(__('Submit'), ['type' => 'submit', 'disabled' => 'disabled', 'class' => 'btn btn-primary rounded-pill shadow-sm px-4']) ?>
					<?= $this->Form->end() ?>
				</div>

				<script>
					var checkboxes = $("input[type='checkbox']"),
						submitButton = $("button[type='submit']");

					checkboxes.click(function() {
						submitButton.attr("disabled", !checkboxes.is(":checked"));
					});
				</script>

			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card bg-body-tertiary border-0 shadow-lg mb-4 rounded-lg">
			<div class="card-body p-4">
				<ul>
					<li>All information provided during registration is correct</li>
					<li>One email can register only one account</li>
					<li>Please use strong password to ensure your account is secure</li>
					<li>Contact administrator if unable to register</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$(".input select").select2();
	});
</script>

<style>
	
	/* Light Mode Styling */
	body {
		font-family: 'Arial', sans-serif;
	}

	.card {
		background: rgba(255, 255, 255, 0.9);
		border-radius: 20px;
		box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
	}

	.card-body {
		padding: 30px;
	}

	.form-control {
		border-radius: 15px;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
	}

	.form-control:focus {
		border-color: #61dafb;
		box-shadow: 0 0 5px rgba(97, 218, 251, 0.5);
	}

	.btn-primary {
		background: linear-gradient(135deg, #4e73df, #224abe);
		border: none;
		color: #fff;
	}

	.btn-primary:hover {
		background: linear-gradient(135deg, #224abe, #4e73df);
		color: #fff;
	}

	.btn-light {
		border: 1px solid #ddd;
	}

	.btn-outline-warning {
		border-color: #ffc107;
		color: #ffc107;
	}

	.btn-outline-warning:hover {
		background-color: #ffc107;
		color: #fff;
	}

	/* Dark Mode Styling */
	@media (prefers-color-scheme: dark) {
		body {
			/* Background image for dark mode */
			background: url('<?= $this->Url->image("surat/background.jpg") ?>') no-repeat center center fixed;
			background-size: cover;
			color: #e9ecef;
		}

		.card {
			background: rgba(33, 37, 41, 0.9); /* Dark background for the card */
			box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
		}

		.form-control {
			background: #495057;
			color: #e9ecef;
			border: 1px solid #6c757d;
		}

		.form-control:focus {
			border-color: #61dafb;
			box-shadow: 0 0 5px rgba(97, 218, 251, 0.5);
		}

		.btn-primary {
			background: linear-gradient(135deg, #61dafb, #1976d2);
		}

		.btn-primary:hover {
			background: linear-gradient(135deg, #1976d2, #61dafb);
		}

		.btn-light {
			background: #6c757d;
			color: #f8f9fa;
		}

		.text-muted {
			color: #adb5bd !important;
		}

		a.link-primary {
			color: #61dafb !important;
		}

		a.link-primary:hover {
			text-decoration: underline;
		}
	}
	
	.page_title {
		font-weight: 900; /* Bolder text */
	}
</style>
<?php echo $this->Html->css('animate.min'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.css" integrity="sha256-iwSnUqgAndMlZnwFWAAzto9R/6Un2RBguZEITMb0Olk=" crossorigin="anonymous" />

<br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="mx-auto p-2 col-md-6">
    <div class="card bg-body-tertiary border-0 shadow-lg mb-4 rounded-lg">
        <div class="card-body p-4">
            <!-- Title -->
            <div class="text-center mb-4">
                <h1 class="display-5 fw-bold text-primary-light">Forgot Password</h1>
                <p class="text-muted">Please enter your email to reset your password</p>
            </div>

            <!-- Form -->
            <?= $this->Form->create() ?>

            <div class="form-group mb-4">
                <!-- Email Field -->
                <?= $this->Form->control('email', [
                    'required' => true,
                    'class' => 'form-control form-control-lg rounded-pill shadow-sm',
                    'autocomplete' => 'off',
                    'placeholder' => 'Enter your email address',
                    'label' => false
                ]) ?>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between align-items-center">
                <?= $this->Form->button(__('Reset'), ['type' => 'reset', 'class' => 'btn btn-light rounded-pill shadow-sm px-4']) ?>
                <?= $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary rounded-pill shadow-sm px-4']) ?>
            </div>

            <?= $this->Form->end() ?>

            <!-- Links -->
            <div class="text-center mt-4">
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'registration']); ?>" class="link-primary">Register</a>
                <span class="mx-2 text-muted">|</span>
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgot_username']); ?>" class="link-primary">Forgot Username?</a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Light Mode Styling */
    body {
        background: url('<?= $this->Url->image("surat/background.jpg") ?>') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Arial', sans-serif;
        color: #212529;
    }

    .card {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
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

    .text-primary-light {
        color: #4e73df !important;
    }

    /* Dark Mode Styling */
    @media (prefers-color-scheme: dark) {
        body {
            background: url('<?= $this->Url->image("surat/background.jpg") ?>') no-repeat center center fixed;
            background-size: cover;
            color: #e9ecef;
        }

        .card {
            background: rgba(33, 37, 41, 0.9); /* Dark background for the card */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .text-primary-light {
            color: #61dafb !important; /* Light blue for titles in dark mode */
        }

        .btn-primary {
            background: linear-gradient(135deg, #61dafb, #1976d2);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #1976d2, #61dafb);
        }

        .btn-light {
            background: #6c757d; /* Neutral button for dark mode */
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
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.min.js" integrity="sha256-qG3zvg7/f5CZHwV8IeaQfBY5Hm+M0KR3PMk9lAHp39s=" crossorigin="anonymous"></script>
<script>
    $("#js-rotating").Morphext({
        animation: "fadeInDown",
        complete: function () {
            console.log("This is called after a phrase is animated in! Current phrase index: " + this.index);
        }
    });
</script>

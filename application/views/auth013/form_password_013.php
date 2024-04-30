<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013</title>
    <!-- Bootstrap CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        h1, h3 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="password"] {
            padding: 10px;
            width: 100%;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container">
        <h3>CHANGE PASSWORD</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <div class="error-message"><?=validation_errors()?></div>
        <form action="" method="post">
            <div class="form-group">
                <label for="oldPassword">OLD PASSWORD</label>
                <input type="password" name="oldpassword" id="oldPassword" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="newPassword">NEW PASSWORD</label>
                <input type="password" name="newpassword" id="newPassword" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="change" value="CHANGE PASSWORD" class="btn btn-primary">
            </div>
        </form>
        <hr>
        <a href="<?=base_url()?>" class="btn btn-secondary">Back to Home</a>
    </div>
</body>
</html>

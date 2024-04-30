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
        input[type="file"] {
            padding: 5px;
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
        <h3>CHANGE PHOTO</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <div class="error-message"><?=$error?></div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="currentPhoto">CURRENT PHOTO</label>
                <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" class="img-thumbnail" width="128" height="128" />
            </div>
            <div class="form-group">
                <label for="newPhoto">NEW PHOTO</label>
                <input type="file" name="photo" id="newPhoto" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="upload" value="UPLOAD PHOTO" class="btn btn-primary">
            </div>
        </form>
        <hr>
        <a href="<?=base_url()?>" class="btn btn-secondary">Back to Home</a>
    </div>
</body>
</html>

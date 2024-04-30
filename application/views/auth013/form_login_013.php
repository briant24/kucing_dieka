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
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            overflow-y: hidden;
            background-image:  url('<?=base_url('uploads/cats/default.png')?>');
            background-size : cover;
        }
        .container {
            margin-top: 50px;
            max-width: 100%
        }
        h1, h3 {
            text-align: center;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
<section class="vh-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">CATShop - Login Page</h3>
            <?=$this->session->flashdata('msg')?>
            <div class="error-message"><?=validation_errors()?></div>
            <form action="" method="post">
                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                </div>
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit" value="Login" name="login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>   
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

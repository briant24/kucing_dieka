<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013 - CAT SALE FORM</title>
    <!-- Sertakan CSS Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <style>
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container mt-5">
        <h3>CAT SALE FORM</h3>
        <hr>
        <form action="" method="post">
            <div class="form-group row">
                <label for="catId" class="col-sm-2 col-form-label">Cat Id</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?=$cat->id_013?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="catName" class="col-sm-2 col-form-label">Cat Name</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?=$cat->name_013?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="catType" class="col-sm-2 col-form-label">Cat Type</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?=$cat->type_013?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="catPrice" class="col-sm-2 col-form-label">Cat Price</label>
                <div class="col-sm-10">
                    <p class="form-control-static">$<?=$cat->price_013?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="customerName" class="col-sm-2 col-form-label">Customer Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="customerName" name="customer_name_013">
                </div>
            </div>
            <div class="form-group row">
                <label for="customerAddress" class="col-sm-2 col-form-label">Customer Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="customerAddress" name="customer_address_013"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="customerPhone" class="col-sm-2 col-form-label">Customer Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="customerPhone" name="customer_phone_013">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="submit">Sale</button>
                    <a href="<?=site_url('cats013')?>" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Sertakan JavaScript Bootstrap -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

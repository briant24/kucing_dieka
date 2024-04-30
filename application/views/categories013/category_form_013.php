<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORY 013 - CATEGORY FORM</title>
    <!-- Sertakan CSS Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container mt-5">
        <h3>CATEGORY FORM</h3>
        <hr>
        <?php
        $name='';
        $description='';

        if(isset($category)) {
            $name=$category->category_name_013;
            $description=$category->description_013;
        }
        ?>
        <form action="" method="post">
            <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="categoryName" name="category_name_013" value="<?=$name?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="categoryDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="categoryDescription" name="description_013" rows="7" required><?=$description?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" class="btn btn-primary" value="SAVE" name="submit">
                    <a href="<?=site_url('categories013')?>" class="btn btn-secondary">CANCEL</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Sertakan JavaScript Bootstrap -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

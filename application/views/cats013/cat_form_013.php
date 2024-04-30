<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013 - CAT FORM</title>
    <!-- Sertakan CSS Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container mt-5">
        <h3>CAT FORM</h3>
        <hr>
        <?php
        $name='';
        $type='';
        $gender='';
        $age='';
        $price='';

        if(isset($cat)) {
            $name=$cat->name_013;
            $type=$cat->type_013;
            $gender=$cat->gender_013;
            $age=$cat->age_013;
            $price=$cat->price_013;
        }
        ?>
        <form action="" method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name_013" value="<?=$name?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select class="form-control" id="type" name="type_013" required>
                        <option value="">Choose type</option>
                        <?php foreach($category as $cate) { ?>
                            <option value="<?=$cate->category_name_013?>" <?=set_select('type_013',$cate->category_name_013,$type==$cate->category_name_013?TRUE:FALSE)?>><?=$cate->category_name_013?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender_013" id="male" value="Male" <?=$gender=='Male'?'checked':''?> required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender_013" id="female" value="Female" <?=$gender=='Female'?'checked':''?> required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age (month)</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age" name="age_013" value="<?=$age?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price_013" value="<?=$price?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" class="btn btn-primary" value="SAVE" name="submit">
                    <a href="<?=site_url('cats013')?>" class="btn btn-secondary">CANCEL</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

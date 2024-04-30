<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013 - CATS LIST</title>
    <!-- Sertakan CSS Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <style>
        .btn-home {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container mt-5">
        <h3>CATS LIST</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <a href="<?=site_url('cats013/add')?>" class="btn btn-success">Add new cat</a>
        <hr>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                    <th>Age (month)</th>
                    <th>Price($)</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cats as $cat) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td>
                        <img src="<?=base_url('uploads/cats/'.$cat->photo_cats_013)?>" class="rounded-circle" width="60" height="60">
                        <a class="nav-link" href="<?=site_url('Cats013/changephoto/'.$cat->id_013)?>">Change Photo</a>
                    </td>
                    <td><?=$cat->name_013?></td>
                    <td><?=$cat->type_013?></td>
                    <td><?=$cat->gender_013?></td>
                    <td><?=$cat->age_013?></td>
                    <td><?=$cat->price_013?></td>
                    <td><a href="<?=site_url('cats013/edit/'.$cat->id_013)?>" class="btn btn-info">Edit</a></td>
                    <td><a href="<?=site_url('cats013/delete/'.$cat->id_013)?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this cat?')">Delete</a></td>
                    <td>
                        <?php if($cat->sold_013==1) { ?>
                            <span class="badge badge-secondary">SOLD</span>
                        <?php } else { ?>
                            <a href="<?=site_url('cats013/sale/'.$cat->id_013)?>" class="btn btn-success">SALE</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><?=$this->pagination->create_links();?></p>
    </div>

    <!-- Sertakan JavaScript Bootstrap -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORY 013</title>
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
        <h3>CATEGORY LIST</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <a href="<?=site_url('categories013/add')?>" class="btn btn-success">Add new category</a>
        <hr>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($categories013 as $category) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$category->category_name_013?></td>
                    <td><?=$category->description_013?></td>
                    <td><a href="<?=site_url('categories013/edit/'.$category->category_id_013)?>" class="btn btn-info">Edit</a></td>
                    <td><a href="<?=site_url('categories013/delete/'.$category->category_id_013)?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Sertakan JavaScript Bootstrap -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

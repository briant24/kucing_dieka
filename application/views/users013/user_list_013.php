<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER 013</title>
    <!-- Bootstrap CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        h1, h3, h4 {
            text-align: center;
        }
        table {
            margin: 0 auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        a {
            text-decoration: none;
        }
        .btn {
            padding: 5px 10px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container">
        <h3>USER LIST</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <a href="<?=site_url('users013/add')?>" class="btn btn-success">Add new user</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Usertype</th>
                    <th>Fullname</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($users as $user) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$user->username_013?></td>
                    <td><?=$user->usertype_013?></td>
                    <td><?=$user->fullname_013?></td>
                    <td><a href="<?=site_url('users013/edit/'.$user->userid_013)?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?=site_url('users013/delete/'.$user->userid_013)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                    <td><a href="<?=site_url('users013/reset/'.$user->userid_013)?>" class="btn btn-warning" onclick="return confirm('Are you sure?')">Reset Password</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

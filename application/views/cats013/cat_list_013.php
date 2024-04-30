<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013</title>
</head>
<body>
    <h1>CATSHOP 013</h1>
    <h3>CATS LIST</h3>
    <a href="<?=base_url()?>"><h4>HOME</h4></a>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <a href="<?=site_url('cats013/add')?>">Add new cat</a>
    <hr>
    <table border="1">
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
        <?php foreach($cats as $cat) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><img src="<?=base_url('uploads/cats/'.$cat->photo_cats_013)?>" style="border-radius:50%;" width="60" height="60"/>
            <a class="nav-link" href="<?=site_url('Cats013/changephoto/'.$cat->id_013)?>">Change Photo</a></td>
            <td><?=$cat->name_013?></td>
            <td><?=$cat->type_013?></td>
            <td><?=$cat->gender_013?></td>
            <td><?=$cat->age_013?></td>
            <td><?=$cat->price_013?></td>
            <td><a href="<?=site_url('cats013/edit/'.$cat->id_013)?>">Edit</a></td>
            <td><a href="<?=site_url('cats013/delete/'.$cat->id_013)?>"onclick="return confirm('Are you sure?')" >Delete</a></td>
            <td><?php if($cat->sold_013==1) echo 'SOLD'; else { ?><a href="<?=site_url('cats013/sale/'.$cat->id_013)?>">SALE</a><?php } ?></td>
        </tr><?php } ?>
    </table>
    <p><?=$this->pagination->create_links();?></p>
</body>
</html>

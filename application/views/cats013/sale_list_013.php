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
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<?php $this->load->view('headers'); ?>
<body>
    <div class="container">
        <h3>SALE LIST</h3>
        <hr>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sale ID</th>
                        <th>Sale Date</th>
                        <th>Cat ID</th>
                        <th>Customer Name</th>
                        <th>Customer Address</th>
                        <th>Customer Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($sales as $sale) { ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$sale->sale_id_013?></td>
                        <td><?=$sale->sale_date_013?></td>
                        <td><?=$sale->cat_id_013?></td>
                        <td><?=$sale->customer_name_013?></td>
                        <td><?=$sale->customer_address_013?></td>
                        <td><?=$sale->customer_phone_013?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="<?=base_url()?>" class="btn btn-primary">HOME</a>
    </div>
</body>
</html>

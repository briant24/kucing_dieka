<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 013 - Change Cat Photo</title>
    <!-- Bootstrap CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        h1, h3, h4 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        table {
            margin: 0 auto;
        }
        input[type="file"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('headers'); ?>
    <div class="container">
        <h3>CHANGE CAT PHOTO PAGE</h3>
        <hr>
        <?=$this->session->flashdata('msg')?>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td></td>
                    <td><img src="<?= base_url ('uploads/cats/' . $cat->photo_cats_013) ?>" width="150" height="150" /></td>
                </tr>
                <tr>
                    <td>New Photo</td>
                    <td><input type="file" name="photo" required/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        &nbsp;
                        <input type="submit" name="upload" value="UPLOAD" class="btn btn-primary" />
                        <a href="<?=site_url('cats013')?>" class="btn btn-secondary">CANCEL</a>
                    </td>
                </tr>
            </table>
        </form>
        <hr>
        <a href="<?=base_url('')?>"><h4>Back to Home</h4></a>
    </div>
</body>
</html>

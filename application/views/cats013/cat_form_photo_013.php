<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOPE 013</title>
</head>
<body>
    <h1>CATSHOP 013</h1>
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
                    <input type="submit" name="upload" value="UPLOAD" />
                    <a href="<?=site_url('cats013')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form><hr>
    <a href="<?=base_url('')?>"><h4>Back to Home</h4></a>
</body>
</html>

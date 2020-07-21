<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>edit data</center>
    <?php
    foreach ($user as $su) {

        // print_r($user);
    ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="POST">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $su->id ?>">
                        <input type="text" name="nama" value="<?php echo $su->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $su->alamat ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan" value="<?php echo $su->pekerjaan ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>
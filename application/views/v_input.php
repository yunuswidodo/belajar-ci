<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>Membuat crud dengan codeigniter</center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="POST">
        <table style="margin:20px aut;">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td>Pekerjaaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="tambah"></td>
            </tr>

        </table>

    </form>

</body>

</html>
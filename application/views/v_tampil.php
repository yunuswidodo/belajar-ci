<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>bissmilah</center>
    <?php echo anchor('crud/tambah', 'Tambah Data'); ?>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>pekerjaan</th>
            <th>action</th>
        </tr>
        <?php
        foreach ($user as $u) {
        ?>
            <tr>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $u->id, 'Edit') ?>
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus') ?>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>



</body>

</html>
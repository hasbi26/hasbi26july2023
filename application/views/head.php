<!DOCTYPE html>
<html lang="en">

<head>
    <title>tes</title>
    <style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>

<body>
    <h1>ini header</h1>

    <form action="<?= base_url('welcome/saveData')?>" method="POST">

    <label>nama</label> <input type="text" name="pegawai_nama">
    <label>jabatan</label> <input type="text" name="pegawai_jabatan">
    <label>umur</label> <input type="text" name="pegawai_umur">
   <label>alamat</label> <input type="text" name="pegawai_alamat">
    <button type="submit" >save</button>


    </form>

    <table>
        <thead>
            <th> nama</th>
            <th> jabatan</th>
            <th> umur </th>
            <th>jabatan</th>
            <th>delete</th>
        </thead>
        <?php foreach ($User as $row) : ?>
        <tbody>
            <td> <?= $row->pegawai_nama ?></td>
            <td><?= $row->pegawai_jabatan ?></td>
            <td><?= $row->pegawai_umur ?></td>
            <td><?= $row->pegawai_alamat ?></td>
            <td><a href=<?= base_url('welcome/delete/'.$row->pegawai_id) ?>> hapus</a> </td>
        </tbody>
        <?php endforeach ?>
    </table>




</body>



</html>
<?php
  include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h2>Data siswa </h2>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama siswa</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Agama</th>
        <th>Asal sekolah</th>
        <th>Aksi</th>
      </tr>
      <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM data_siswa ");
        while ($data = mysqli_fetch_array($sql))
        {
      ?>
       <tr>
        <td><?php echo $no ++;?></td>
        <td><?php echo $data ['nama_siswa'];?> </td>
        <td><?php echo $data ['alamat_siswa'];?> </td>
        <td><?php echo $data ['jk_siswa'];?> </td>
        <td><?php echo $data ['agama_siswa'];?> </td>
        <td><?php echo $data ['asal_sekolah'];?> </td>
        <td>
          <a href="edit_data.php?id_siswa=<?=$data['id_siswa']?>">Edit</a>
          <a href="hapus_data.php?id_siswa=<?=$data['id_siswa']?>">Hapus</a>
       </td>
      <?php
        }
      ?>
    </table>

  </body>
</html>
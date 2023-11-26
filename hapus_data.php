<?php
  include "koneksi.php";
  $id = $_GET['id_siswa'];
  $sql = mysqli_query($koneksi, "DELETE FROM data_siswa WHERE id_siswa='$id'");
  
  echo "Data siswa telah dihapus";
  echo "<meta http-equiv='refresh' content='2; url=data_siswa.php'>";
?>
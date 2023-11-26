<?php
  include "koneksi.php";
  $id = $_GET['id_siswa'];
  $sql = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id_siswa='$id'");
  $data = mysqli_fetch_array($sql);
  ?>

<h2>Edit data siswa</h2>
<form action="" method="post">
  <table border='1'>
    <tr>
      <td width="130">Nama siswa</td>
      <td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'];?>"></td>
    </tr>
    <tr>
      <td width="130">Alamat</td>
      <td><input type="text" name="alamat_siswa" value="<?php echo $data['alamat_siswa'];?>"></td>
    </tr>
    <tr>
      <td width="130">Gender</td>
      <td><input type="text" name="jk_siswa" value="<?php echo $data['jk_siswa'];?>"></td>
    </tr>
    <tr>
      <td width="130">Agama</td>
      <td><input type="text" name="agama_siswa" value="<?php echo $data['agama_siswa'];?>"></td>
    </tr>
    <tr>
      <td width="130">Aasal sekolah</td>
      <td><input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah'];?>"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Kirim" name="proses"></td>
      <td>
        <a href="data_siswa.php">Batal</a><br>
      </td>
    </tr>
  </table>
</form>

<?php
  
  if(isset($_POST['proses'])){
    mysqli_query($koneksi, "update data_siswa set
    nama_siswa = '$_POST[nama_siswa]',
    alamat_siswa= '$_POST[alamat_siswa]',
    jk_siswa = '$_POST[jk_siswa]',
    agama_siswa = '$_POST[agama_siswa]',
    asal_sekolah = '$_POST[asal_sekolah]' WHERE id_siswa='$id'");
    
    echo "Data siswa telah diubah";
    echo "<meta http-equiv='refresh' content='2; url=data_siswa.php'>";
  }
?>
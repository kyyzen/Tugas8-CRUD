<h2>Pendaftaran</h2>
<form action="" method="post">
  <table border='1'>
    <tr>
      <td width="130">Nama siswa</td>
      <td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
      <td width="130">Alamat</td>
      <td><input type="text" name="alamat_siswa"></td>
    </tr>
    <tr>
      <td width="130">Gender</td>
      <td><input type="text" name="jk_siswa"></td>
    </tr>
    <tr>
      <td width="130">Agama</td>
      <td><input type="text" name="agama_siswa"></td>
    </tr>
    <tr>
      <td width="130">Aasal sekolah</td>
      <td><input type="text" name="asal_sekolah"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Kirim" name="proses"></td>
      <td>
        <a href="index.php">Batal</a><br>
      </td>
    </tr>
  </table>
</form>

<?php
  include 'koneksi.php';
  
  if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into data_siswa set
    nama_siswa = '$_POST[nama_siswa]',
    alamat_siswa= '$_POST[alamat_siswa]',
    jk_siswa = '$_POST[jk_siswa]',
    agama_siswa = '$_POST[agama_siswa]',
    asal_sekolah = '$_POST[asal_sekolah]'");
    
    echo "Data siswa baru berhasil disimpan";
    echo "<meta http-equiv='refresh' content='2; url=data_siswa.php'>";
  }
?>
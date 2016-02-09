<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once '../model/user.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["namauser"];
  $no_identitas = $_POST["no_identitas"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $telepon = $_POST["telepon"];
  $fakultas = $_POST["fakultas"];
  $jurusan = $_POST["jurusan"];
  $userModel = new User();
  $userModel->add( $name, $no_identitas, $pekerjaan, $alamat, $telepon, $fakultas, $jurusan);

}
header("Location: ../view/user.php");
exit();
?>
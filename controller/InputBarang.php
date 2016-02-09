<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once '../model/barang.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["nama_barang"];
  $status = $_POST["status"];
  $lokasi = $_POST["lokasi"];
  $barangModel = new Barang();
  $barangModel->add($name, $status, $lokasi);
}
header("Location: ../view/barang.php");
exit();
?>
<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once '../model/pemesanan.php';
require_once '../model/user.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  //pemesanan
  $id_barang = $_POST["id_barang"];
  $status = $_POST["status"];
  $tgl_awal = $_POST["tglawal"];

  //user
  $name = $_POST["namauser"];
  $no_identitas = $_POST["no_identitas"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $telepon = $_POST["telepon"];
  $fakultas = $_POST["fakultas"];
  $jurusan = $_POST["jurusan"];

  $userModel = new User();
  $arr = $userModel->getWithNumber($no_identitas); 
  if(empty($arr)){
  	$userModel->add( $name, $no_identitas, $pekerjaan, $alamat, $telepon, $fakultas, $jurusan);	
  }
  $arr2 = $userModel->getWithNumber($no_identitas); 
  foreach ($arr2 as $key) {
    $id_user = $key["id_user"];
  }
  $pemesananModel = new Pemesanan();
  foreach($id_barang as $asd){
    $pemesananModel->add($asd, $id_user, $status, $tgl_awal);
  }
}
header("Location: ../view/pemesanan.php");
exit();
?>
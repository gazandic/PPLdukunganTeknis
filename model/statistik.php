<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once 'model.php';
class Statistik extends Model {

  public function getJumlahKerusakanBarang() {
    $sql = "SELECT nama_barang,jumlah_rusak FROM duktek_barang";
    $result =  $this->getResultQuery($sql);
    $arrJumlah = array(
      "nama_barang" => array(),
      "jumlah_rusak" => array()
      );
    foreach($result as $lol) {
       $arrJumlah["nama_barang"][] = $lol["nama_barang"];
       $arrJumlah["jumlah_rusak"][] =$lol["jumlah_rusak"];
    }
    return $arrJumlah;
  }
   public function getJumlahStatistikKelompok() {
    $sql = "SELECT DISTINCT pekerjaan FROM duktek_user";
    $result =  $this->getResultQuery($sql);
    $arrJumlah = array(
      "nama" => array(),
      "jumlah" => array()
      );
    foreach($result as $lol) {
       $sql2 = "SELECT pekerjaan FROM duktek_peminjaman NATURAL JOIN duktek_user WHERE pekerjaan = '".$lol["pekerjaan"]."'";
       $results =  $this->getResultQuery($sql2);
       $arrJumlah["nama"][] = $lol["pekerjaan"];
       $arrJumlah["jumlah"][] = count($results);
    }
    return $arrJumlah;
  }
  public function getStatistikPeminjamanBarang() {
    $sql = "SELECT DISTINCT nama_barang FROM duktek_barang, duktek_peminjaman WHERE duktek_peminjaman.id_barang=duktek_barang.id_barang";
    $result =  $this->getResultQuery($sql);
    $arrJumlah = array(
      "nama_barang" => array(),
      "jumlah" => array()
    );
    foreach($result as $lol) {
      $sql2 = "SELECT nama_barang FROM duktek_peminjaman,duktek_barang WHERE duktek_peminjaman.id_barang=duktek_barang.id_barang AND nama_barang = '".$lol["nama_barang"]."'";
      $result2 =  $this->getResultQuery($sql2);
      $arrJumlah["nama_barang"][] = $lol["nama_barang"] ;
      $arrJumlah["jumlah"][] = count($result2);
    }
    return $arrJumlah;
  }
}
?>
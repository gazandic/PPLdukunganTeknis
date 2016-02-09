<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once 'model.php';
class Barang extends Model {
  // take answer from certain question ID
  public function get($id) {
    $sql = "SELECT * FROM duktek_barang WHERE id_barang=$id";
    return $this->getResultQuery($sql);
  }
  public function getAll() {
    $sql = "SELECT * FROM duktek_barang";
    return $this->getResultQuery($sql);
  }
  public function getAllbyKeyword($keyword) {
    $sql = "SELECT * FROM duktek_barang WHERE nama_barang like '%".$keyword."%' OR lokasi like '%".$keyword."%' ";
    return $this->getResultQuery($sql);
  }
  public function getAllAda() {
    $sql = "SELECT * FROM duktek_barang WHERE status='ada'";
    return $this->getResultQuery($sql);
  }
  public function add( $name, $status, $lokasi) {
    $sql = "INSERT INTO duktek_barang(nama_barang, status, lokasi, jumlah_rusak) VALUES ('$name','$status','$lokasi', 0)";
    $this->executeQuery($sql);
  }
  public function rusak($id) {
    $sql = "UPDATE duktek_barang SET status='rusak' WHERE id_barang=$id";
    $this->executeQuery($sql);
    $sql = "UPDATE duktek_barang SET jumlah_rusak=jumlah_rusak+1 WHERE id_barang=$id";
    $this->executeQuery($sql);
  }
  public function dipinjam($id) {
    $sql = "UPDATE duktek_barang SET status='dipinjam' WHERE id_barang=$id";
    $this->executeQuery($sql);
  }
  public function diperbaiki($id) {
    $sql = "UPDATE duktek_barang SET status='diperbaiki' WHERE id_barang=$id";
    $this->executeQuery($sql);
  }
  public function ada($id) {
    $sql = "UPDATE duktek_barang SET status='ada' WHERE id_barang=$id";
    $this->executeQuery($sql);
  }
}
?>
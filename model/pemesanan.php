<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once 'model.php';
class Pemesanan extends Model {
  // take answer from certain question ID
  public function getWithIdUser($id_pemesanan) {
    $sql = "SELECT * FROM duktek_pemesanan WHERE id_pemesanan=$id_pemesanan ";
    return $this->getResultQuery($sql);
  }
  public function get($id_barang, $id_user) {
    $sql = "SELECT * FROM duktek_pemesanan WHERE id_user=$id_user AND id_barang = $id_barang ";
    return $this->getResultQuery($sql);
  }
  public function delete($id_barang, $id_user){
    $sql = "DELETE from duktek_pemesanan WHERE id_user=$id_user AND id_barang = $id_barang ";
    $this->executeQuery($sql);
  }
  public function getAll() {
    $sql = "SELECT duktek_pemesanan.id_user, duktek_pemesanan.id_barang, duktek_pemesanan.status, duktek_pemesanan.tanggal_awal, duktek_pemesanan.tanggal_akhir, duktek_user.nama , duktek_user.no_identitas, duktek_barang.nama_barang, duktek_barang.lokasi FROM duktek_barang,duktek_pemesanan NATURAL JOIN duktek_user WHERE duktek_pemesanan.id_barang=duktek_barang.id_barang";
    return $this->getResultQuery($sql);
  }
  public function getAllbyKeyword($keyword) {
    $sql = "SELECT duktek_pemesanan.id_barang, duktek_pemesanan.id_user, duktek_pemesanan.status, duktek_pemesanan.tanggal_awal, duktek_pemesanan.tanggal_akhir, duktek_user.nama , duktek_user.no_identitas, duktek_barang.nama_barang, duktek_barang.lokasi FROM duktek_barang,duktek_pemesanan NATURAL JOIN duktek_user WHERE duktek_pemesanan.id_barang=duktek_barang.id_barang AND ( duktek_user.nama like '%".$keyword."%' OR duktek_user.no_identitas like '%".$keyword."%'  OR duktek_barang.nama_barang like '%".$keyword."%' ) ";
    return $this->getResultQuery($sql);
  }
  public function add( $id_barang, $id_user, $status, $tgl_awal) {
    $sql = "INSERT INTO duktek_pemesanan(id_barang, id_user, status, tanggal_awal) VALUES ('$id_barang','$id_user','$status','$tgl_awal')";
    $this->executeQuery($sql);
  }
}
?>
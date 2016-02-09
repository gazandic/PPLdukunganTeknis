<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
require_once 'model.php';
class Peminjaman extends Model {
  // take answer from certain question ID
  public function getWithIdUser($id_peminjaman) {
    $sql = "SELECT * FROM duktek_peminjaman WHERE id_peminjaman=$id_peminjaman ";
    return $this->getResultQuery($sql);
  }
  public function getAll() {
    $sql = "SELECT duktek_peminjaman.id_barang, duktek_peminjaman.id_user, duktek_peminjaman.status, duktek_peminjaman.tanggal_awal, duktek_peminjaman.tanggal_akhir, duktek_user.nama , duktek_user.no_identitas, duktek_barang.nama_barang, duktek_barang.lokasi FROM duktek_barang,duktek_peminjaman NATURAL JOIN duktek_user WHERE duktek_peminjaman.id_barang=duktek_barang.id_barang";
    return $this->getResultQuery($sql);
  }
   public function getAllbyKeyword($keyword) {
    $sql = "SELECT duktek_peminjaman.id_barang, duktek_peminjaman.id_user, duktek_peminjaman.status, duktek_peminjaman.tanggal_awal, duktek_peminjaman.tanggal_akhir, duktek_user.nama , duktek_user.no_identitas, duktek_barang.nama_barang, duktek_barang.lokasi FROM duktek_barang,duktek_peminjaman NATURAL JOIN duktek_user WHERE duktek_peminjaman.id_barang=duktek_barang.id_barang AND ( duktek_user.nama like '%".$keyword."%' OR duktek_user.no_identitas like '%".$keyword."%'  OR duktek_barang.nama_barang like '%".$keyword."%' ) ";
    return $this->getResultQuery($sql);
  }
  public function add( $id_barang, $id_user, $status, $tgl_awal, $tgl_akhir) {
    $sql = "INSERT INTO duktek_peminjaman(id_barang, id_user, status, tanggal_awal, tanggal_akhir) VALUES ('$id_barang','$id_user','$status','$tgl_awal','$tgl_akhir')";
    $this->executeQuery($sql);
  }
  public function addProsesi( $id_barang, $id_user, $status, $tgl_awal) {
    $sql = "INSERT INTO duktek_peminjaman(id_barang, id_user, status, tanggal_awal, tanggal_akhir) VALUES ('$id_barang','$id_user','$status','$tgl_awal', 0)";
    $this->executeQuery($sql);
  }
  public function selesai( $id_barang, $id_user, $tgl_akhir){
    $sql = "UPDATE duktek_peminjaman SET status='selesai' WHERE id_barang=$id_barang AND id_user=$id_user";
    $this->executeQuery($sql);
    $sql = "UPDATE duktek_peminjaman SET tanggal_akhir='$tgl_akhir' WHERE id_barang=$id_barang AND id_user=$id_user";
    $this->executeQuery($sql);
  }
}
?>
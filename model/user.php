<?php
require_once 'model.php';
class User extends Model {
  // take answer from certain question ID
  public function get($id) {
    $sql = "SELECT * FROM duktek_user WHERE id_user=$id ";
    return $this->getResultQuery($sql);
  }
  public function getWithNumber($no_identitas) {
    $sql = "SELECT * FROM duktek_user WHERE no_identitas=$no_identitas ";
    return $this->getResultQuery($sql);
  }
  public function getAll() {
    $sql = "SELECT * FROM duktek_user ";
    return $this->getResultQuery($sql);
  }
  public function getAllbyKeyword($keyword) {
    $sql = "SELECT * FROM duktek_user WHERE nama like '%".$keyword."%' OR no_identitas like '%".$keyword."%' ";
    return $this->getResultQuery($sql);
  }
  public function add( $name, $no_identitas, $pekerjaan, $alamat, $telepon, $fakultas, $jurusan) {
    $sql = "INSERT INTO duktek_user(nama, no_identitas, pekerjaan, alamat, telepon, fakultas, jurusan) VALUES ('$name','$no_identitas','$pekerjaan','$alamat','$telepon','$fakultas','$jurusan')";
    $this->executeQuery($sql);
  }
  public function Relokasi($id, $lokasi) {
    $sql = "UPDATE duktek_user SET alamat=$alamat WHERE id_answer=$id";
    $this->executeQuery($sql);
  }
}
?>
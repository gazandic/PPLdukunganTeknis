<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php 
    require_once '../model/model.php';
    require_once '../model/peminjaman.php';
    require_once '../model/barang.php';
        $Model = new Model();
        $peminjamanModel = new Peminjaman();
        if(isset($_GET['id_barang'])&&isset($_GET['id_user'])){ 
            $id_barang = $Model->getFromLink($_GET['id_barang']);
            $id_user = $Model->getFromLink($_GET['id_user']);
            date_default_timezone_set('Asia/Jakarta');
            $tgl_akhir = date('Y-m-d h:i:s', time());
            $peminjamanModel->selesai($id_barang,$id_user,$tgl_akhir);
            $barangModel = new Barang();
            $barangModel->ada($id_barang);
        }
        header("Location: ../view/peminjaman.php");
        exit();


?>
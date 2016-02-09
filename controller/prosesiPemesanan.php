<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
 <?php 
    require_once '../model/model.php';
    require_once '../model/pemesanan.php';
    require_once '../model/peminjaman.php';
    require_once '../model/barang.php';
        $Model = new Model();
        $pemesananModel = new Pemesanan();
        $peminjamanModel = new Peminjaman();
        if(isset($_GET['id_barang'])&&isset($_GET['id_user'])){ 
            $id_barang = $Model->getFromLink($_GET['id_barang']);
            $id_user = $Model->getFromLink($_GET['id_user']);
            $listpemesanan = $pemesananModel->get($id_barang,$id_user);
            $status = "sedang dipinjam";
            date_default_timezone_set('Asia/Jakarta');
            $datetime = date('Y-m-d h:i:s', time());
            foreach ($listpemesanan as $pemesanan) {
                if(is_null($pemesanan['tangggal_akhir']))
                    $tgl_peminjaman = $datetime;
                else 
                    $tgl_peminjaman = $pemesanan['tangggal_akhir'];
                $peminjamanModel->add($pemesanan['id_barang'],$pemesanan['id_user']
                    ,$status,$tgl_peminjaman);
            }
            $pemesananModel->delete($id_barang,$id_user);
            $barangModel = new Barang();
            $barangModel->dipinjam($id_barang);
        }
        header("Location: ../view/pemesanan.php");
        exit();
    ?>
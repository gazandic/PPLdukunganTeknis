<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php 
	require_once '../model/model.php';
    $Model = new Model();
        $keyword = $Model->getFromLink($_POST['keyword']);
        $jenis = $Model->getFromLink($_POST['jenis']);
    	switch ($jenis) {
    		case 'barang':
    			header("Location: ../view/barang.php?keyword=$keyword");
                break;
    		
    		case 'peminjaman':
    			header("Location: ../view/peminjaman.php?keyword=$keyword");
    			break;
    		
    		case 'pemesanan':
    			header("Location: ../view/pemesanan.php?keyword=$keyword");
    			break;
    		
    		case 'user':
    			header("Location: ../view/user.php?keyword=$keyword");
    			break;

    	}
    exit();

?>
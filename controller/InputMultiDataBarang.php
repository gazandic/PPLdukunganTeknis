<?php 
	if (isset($_POST['barang'])) {
		$res = "../view/tambahpemesanan.php?";

	    $lisbarang = $_POST['barang'];
	    // $colors is an array of selected values
	    for ($ite=0;$ite<count($lisbarang)-1;$ite++) {
	      $res .= $lisbarang[$ite]."&";		
	    }
	    $res .= $lisbarang[$ite];
	    header("Location: $res");
	    exit();
	}



?>
<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
 <?php 
    require_once '../model/model.php';
    require_once '../model/barang.php';
        $Model = new Model();
        $barangModel = new Barang();
        if(isset($_GET['id_barang'])){ 
	        $id = $Model->getFromLink($_GET['id_barang']);
	        $status = $Model->getFromLink($_GET['status']);
	        switch ($status) {
	        	case "ada":
	        		$barangModel->rusak($id);
	        		break;
	        	
	        	case "rusak":
	        		$barangModel->diperbaiki($id);
	        		break;
	        	
	        	case "diperbaiki":
	        		$barangModel->ada($id);
	        		break;
	        	
	        	default:
	        		break;
	        }
        }
        header("Location: ../view/barang.php");
		exit();
    ?>
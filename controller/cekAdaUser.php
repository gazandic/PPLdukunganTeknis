<?php
	require_once '../model/model.php';
    require_once '../model/user.php';
    $userModel = new User();
    if(isset($_GET['no_identitas'])){ 
    		$us = $userModel->getWithNumber($_GET['no_identitas']);
    		if($us!=null){
    			$arr2;
    			foreach($us as $row) {
    				$arr2 = array('nama_user' => $row["nama"], 
					'alamat' => $row["alamat"],
					 'pekerjaan' => $row["pekerjaan"], 
					 'telepon' => $row["telepon"],
					 'fakultas' => $row["fakultas"], 
					 'jurusan' => $row["jurusan"]);
    			}
				echo json_encode($arr2);
    		}
    }


?>
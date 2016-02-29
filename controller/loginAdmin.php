<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->

<?php 
	require_once '../model/model.php';
    $Model = new Model();
    $username = $Model->getFromLink($_POST['username']);
    $password = $Model->getFromLink($_POST['password']);
    if($username=="admin"&&$password=="duktekitb"){
    	session_start(); 
        $_SESSION["user"] = "admin";
    	header("Location: ../view/statistik.php");
    }
    else{
    	header("Location: ../index.php");
    }
    exit();
?>
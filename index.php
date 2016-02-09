<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->

<?php 
    session_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["user"]=="admin"){
            header("Location: view/statistik.php");
            exit();
        }
    }
    ?>
<html style="background-color: #ef1100;">
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
        <script src="assets/jquery/jquery-1.11.3.min.js"></script>
        <script src="assets/chartjs/Chart.min.js"></script>     
        <meta charset="UTF-8">
        <title>iDuktek</title>
    </head>
    <body style="background-color: #ef1100;"> 
        <div style="height: 80px;width: 100%; display:inline-table; margin-left:47%;  background-color: #ef1100;">
                    <a href="#"><img id="logo" src="assets/img/iduktek.png" ></a>
        </div>
        <div id="panelmasuk" style="margin-top: 70px">
            <div id="register">
                
                <div id="judul" >
                    <h2 style="color: #ef1100;">Login Admin</h2>
                </div>
                <form action="controller/loginAdmin.php" method="POST">
                <br>Username<br>
                <input id="username" name="username" type="text" class="form">
                <br>
                <br>Password<br>
                <input id="password" name="password" type="password" class="form">
                <br><br>
                <input type="submit" class="submit" value="Masuk">
                </form>
                <br><br>
            </div>
        </div>
    </body>
</html>
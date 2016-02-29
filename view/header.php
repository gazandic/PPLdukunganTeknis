<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->

<?php 
    session_start();
    if($_SESSION["user"]!="admin"){
        header("Location: ../index.php");
        exit();
    }
        require_once '../conf.php';?>
    
<html >    
    <head>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
        <link rel="stylesheet" type="text/css" href="../assets/jquery-ui/jquery-ui.css">
        <script src="../assets/jquery/jquery-1.11.3.min.js"></script>
        <script src="../assets/chartjs/Chart.min.js"></script>
        <script src="../assets/js/modernizr-custom.js"></script>
        <script src="../assets/js/polyfiller.js"></script>
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
        <script>
          webshims.setOptions('waitReady', false);
          webshims.setOptions('forms-ext', {types: 'date'});
          webshims.polyfill('forms forms-ext');
        </script>
        <script src="../assets/jquery-ui/jquery-u.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">       
        <meta charset="UTF-8">
        <title>iDuktek</title>
    </head>
    <body>
        <header>
        <div id="navcontainer">
        <div id="headerframe" style="background-color: #ef1100;">
        <div class="brand" style="float: left;margin-left:100px">
        <a href="../view/statistik.php">
            <img id="logo"  src="../assets/img/iduktek.png" >
        </a>
        </div>
       
        <div class="searchform" style="float: left; margin-top:8px;margin-left:150px ">
        <form action="../controller/searchControl.php" method="POST">
            <span>
            <input id="keyword" name="keyword" type="text" class="search rounded searchbar" placeholder="Cari produk">
            <select id="kategori" name="jenis" class="kategoribar">
                <!--<option value="laptop" style="font-weight: bolder">Barang</option>-->
                <option value="barang" >Barang</option>
                <option value="peminjaman" >Peminjaman</option>
                <option value="pemesanan" >Pemesanan</option>
                <option value="user">User</option>
            </select>
            <input type="submit" id="SSbutton" value="Cari">
            </span>
        </form>
        </div>
        <ul style="float: right; margin-top:8px; margin-right: 70px;">
        <li><a href="../controller/logout.php">Logout</a></li>
        </ul>
        </div>
    </div>
    <div class="sidenav" >
        <style>
            .sidenav{
                  background-color: #f5f5f5;height: 100%; text-align: left; margin-left: -49px; margin-top:8px; position: fixed;
            }
            .sidenav ul{
                  list-style-type: none;  display:block; width: 300px; height: 100%;
            }
            .sidenav ul li{
                   border: 1px solid #e7e7e7;padding: 15px 0 15px 0;
            }
            .sidenav ul li a{
                text-decoration: none; color:#ef1100; font-size: 20px;padding: 15px 110px 15px 50px;
            }
            .sidenav ul li:hover {
                   background-color: #ef1100; color: white;
            }
            .sidenav ul li:hover a {
                   background-color: #ef1100; color: white;
            }
         </style>
        <ul>
        <li><a href="statistik.php">Dashboard</a></li>
        <li><a href="barang.php">Barang</a></li>
        <li><a href="peminjaman.php">Peminjaman</a></li>
        <li><a href="pemesanan.php">Pemesanan</a></li>
        <li><a href="user.php">User</a></li>
        </ul>
         
    </div>

</header>

        
        
        
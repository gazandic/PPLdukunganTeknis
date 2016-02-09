<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php include "header.php"; ?>
<section id="hotframe" style="margin-top: 58px; margin-left: 295px; min-height: 680px; width:80%">
    <div id="hot">
        <script src="assets/js/chartupload.js">
</script>
<div id="judul"><h2 style="color: #ef1100">       
        <a style="margin-left: 130px" >Peminjaman</a> 
        <a href="tambahpeminjaman.php">
            <button class="submit"  style=" positon:fixed; left:300px"  >Tambah peminjaman</button></a>
    </h2>
    
</div>

<br>
<table class="list">
<?php 
    require_once '../model/peminjaman.php';
    $peminjamanModel = new Peminjaman();
    require_once '../model/model.php';
    $Model = new Model();
    if(isset($_GET['keyword'])){ 
      $keyword = $Model->getFromLink($_GET['keyword']);
      $listPeminjaman = $peminjamanModel->getAllbyKeyword($keyword);
    }
    else{
    $listPeminjaman = $peminjamanModel->getAll();
    }
    if(!empty($listPeminjaman)){
    ?>
    <tr class="headerlist" >
        <td>Nama User</td>
        <td >No identitas</td>
        <td>Nama Barang</td>
        <td>Lokasi</td>
        <td>Status peminjaman</td>
        <td>Tanggal awal</td>
        <td>Tanggal akhir</td>
        <td>Aksi</td>
    </tr>
    <?php }else{

    ?>
    <h2>Peminjaman kosong</h2>

    <?php }
    foreach($listPeminjaman as $row)  {
?>
<tr>
    <td><?=$row["nama"]?> </td>
    <td><?=$row["no_identitas"]?></td>
    <td><?=$row["nama_barang"]?></td>
    <td><?=$row["lokasi"]?></td>
    <td><?=$row["status"]?></td>
    <td><?=$row["tanggal_awal"]?></td>
    <td><?=$row["tanggal_akhir"]?></td>
    <td>
    <?php if($row["status"]=="sedang dipinjam"){?>
    <a href="../controller/selesaiPeminjaman.php?id_barang=<?=$row["id_barang"]?>&id_user=<?=$row["id_user"]?>">
    
    <button class="submit" style='padding:0px 5px'  >Selesai</button></a></td>
    <?php } ?>
</tr>
        <?php } ?>
        </table>
        <!-- <div style="height:30px"></div>
        <?php for($z=0;$z<9;$z++){ ?>
         
        <a class="listpag" href="#"><?php echo $z+1;?></a>
         <?php } ?>
        
        <div style="height:30px"></div> -->
        

    </div>
    
</section>
</body>
</html>

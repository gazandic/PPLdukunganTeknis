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
        <a style="margin-left: 130px" >Pemesanan</a> 
        <a href="tambahpemesanan.php">
            <button class="submit"  style=" positon:fixed; left:300px"  >Tambah pemesanan</button></a>
    </h2>
    
</div>

<br>
<table class="list">

<?php 
    require_once '../model/pemesanan.php';
    $pemesananModel = new Pemesanan();
    require_once '../model/model.php';
    $Model = new Model();
    if(isset($_GET['keyword'])){ 
      $keyword = $Model->getFromLink($_GET['keyword']);
      $listPemesanan = $pemesananModel->getAllbyKeyword($keyword);
    }
    else{
    $listPemesanan = $pemesananModel->getAll();
    }
    if(!empty($listPemesanan)){
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
    <h2>Pemesanan kosong</h2>

    <?php }
    foreach($listPemesanan as $row) {
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
    <a href="../controller/prosesiPemesanan.php?id_barang=<?=$row["id_barang"]?>&id_user=<?=$row["id_user"]?>">
    <button class="submit" style='padding:0px 5px'  >
    Prosesi</button></a></td>
</tr>
        <?php } ?>
        </table>
        

    </div>
    
</section>
</body>
</html>

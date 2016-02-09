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
        <a style="margin-left: 130px" >Tambah Barang</a> 
        </h2>
    
</div>

<br>
<table class="list" style="width: 80%">
    <?php
        require_once '../model/barang.php';
        $barangModel = new Barang();
        $listbarang = $barangModel->getAllAda();
        if(!empty($listbarang)){
        ?>
        <tr class="headerlist" >
            <td>Nama Barang</td>
            <td >Lokasi</td>
            <td>Status</td>
            <td>Jumlah_rusak</td>
            <td>Maintenis</td>
        </tr>
        <?php }else{
        ?>
        <h2>Barang kosong</h2>
        <?php }
        foreach($listbarang as $row) {
      ?>
        <tr>
          <td><?=$row["nama_barang"]?></td>
          <td><?=$row["lokasi"]?></td>
          <td><?=$row["status"]?></td>
          <td><?=$row["jumlah_rusak"]?></td>
          <td><a href="tambahpeminjaman.php?id_barang=<?=$row["id_barang"]?>&nama_barang=<?=$row["nama_barang"]?>"><button class="submit" style='padding:0px 5px'  >Tambah</button></a></td>
        </tr>
      <?php 
      }
    ?>
        </table>
        

    </div>
    
</section>
</body>
</html>

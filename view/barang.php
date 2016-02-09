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
        <a style="margin-left: 130px" >Barang</a> 
        <a href="tambahbarang.php">
    <button class="submit"  style=" positon:fixed; left:300px"  >Tambah barang</button></a>
    </h2>
    
</div>

<br>
<table class="list" style="width: 80%">

    <?php
        require_once '../model/barang.php';
        $barangModel = new Barang();
        require_once '../model/model.php';
        $Model = new Model();
        if(isset($_GET['keyword'])){ 
          $keyword = $Model->getFromLink($_GET['keyword']);
          $listbarang = $barangModel->getAllbyKeyword($keyword);
        }
        else{
          $listbarang = $barangModel->getAll();
        }
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
          <td><a href="../controller/gantiMaintenis.php?id_barang=<?=$row["id_barang"]?>&status=<?=$row["status"]?>">
          <?php if($row["status"]=="ada"){?>
          <button class="submit" style='padding:0px 5px'  >Rusak</button>
          <?php } else if($row["status"]=="rusak"){?>
          <button class="submit" style='padding:0px 5px'  >Perbaiki</button>
          <?php } else if($row["status"]=="diperbaiki"){?>
          <button class="submit" style='padding:0px 5px'  >Selesai perbaikan</button>
          <?php } ?>
          </td> </a>
        </tr>
      <?php 
      }
    ?>
        </table>        
    </div>
    
</section>
</body>
</html>

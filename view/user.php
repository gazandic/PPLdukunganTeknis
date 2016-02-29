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
        <a style="margin-left: 0px" >User</a> 
        <!-- <a href="tambahuser.php">
            <button class="submit"  style=" positon:fixed; left:300px"  >Tambah user</button></a>
     --></h2>
</div>
<br>
<table class="list">
<tr class="headerlist" >
    <td>Nama User</td>
    <td >No identitas</td>
    <td>Alamat</td>
    <td>Pekerjaan</td>
    <td>Telepon</td>
    <td>Fakultas</td>
    <td>Jurusan</td>
</tr>
<?php 
    require_once '../model/user.php';
    $userModel = new User();
    require_once '../model/model.php';
    $Model = new Model();
    if(isset($_GET['keyword'])){ 
      $keyword = $Model->getFromLink($_GET['keyword']);
      $listuser = $userModel->getAllbyKeyword($keyword);
    }
    else{
        $listuser = $userModel->getAll();
    }
    foreach($listuser as $row) {
?>
        <tr>
            <td><?=$row["nama"]?> </td>
            <td><?=$row["no_identitas"]?></td>
            <td><?=$row["alamat"]?></td>
            <td><?=$row["pekerjaan"]?></td>
            <td><?=$row["telepon"]?></td>
            <td><?=$row["fakultas"]?></td>
            <td><?=$row["jurusan"]?></td>
        </tr>
      <?php 
      }?>
        </table>
    </div>
    
</section>
</body>
</html>

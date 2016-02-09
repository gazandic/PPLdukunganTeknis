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
        <a >Tambah Barang</a>
    </h2>
</div>
<br>   
        <form  action="../controller/InputBarang.php" method="POST" >
            <br>
            <div style="float:left; margin-left: 50px ">
            <table class="listform" >
                <tr>
                    <td><h3>Nama barang:</h3></td>
                    <td><input id="nama_barang" name="nama_barang"  type="text" class="form" value=""></td>
                </tr>
                <tr>
                    <td><h3>Status:</h3></td>
                    <td><input id="status" name="status"  type="text" class="form" value=""></td>
                </tr>
                <tr>
                    <td><h3>Lokasi:</h3></td>
                    <td><input id="lokasi" name="lokasi"  type="text" class="form" value=""></td>
                </tr>
            </table>
            </div>
            <br>
            <input type="submit"   style="position:absolute; margin-top: -70px; margin-left: 100px
                   " class="submit" value="Insert">
        </form>

    </div>
    
</section>
</body>
</html>

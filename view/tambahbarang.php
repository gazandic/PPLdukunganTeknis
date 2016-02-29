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
        <form name="barang" onsubmit="return validateBarangForm()" action="../controller/InputBarang.php" method="POST" >
            <br>
            <div style="float:left; margin-left: 50px ">
            <table class="listform" >
                <tr>
                    <td><h3>Nama barang:</h3></td>
                    <td><input id="nama_barang" name="nama_barang"  type="text" class="form" value="">
                    <span id="nama_barangErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Status:</h3></td>
                    <td>
                    <!-- <input id="status" name="status"  type="text" class="form" value="">
                    <span id="statusErr" class="error">*</span> -->
                    <select id="status" name="status" class="form">
                            <option value="ada">ada</option>
                            <option value="diperbaiki">diperbaiki</option>
                            <option value="rusak">rusak</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><h3>Lokasi:</h3></td>
                    <td><input id="lokasi" name="lokasi"  type="text" class="form" value="">
                    <span id="lokasiErr" class="error">*</span></td>
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
<script src="../assets/js/validate.js"></script>
</html>

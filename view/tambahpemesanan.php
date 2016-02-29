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
        <a >Membuat pemesanan</a>
    </h2>
</div>

<br>
    <?php 
    require_once '../model/model.php';
        $Model = new Model();
        if(isset($_GET['id_barang'])){ 
                //$id_barang = $Model->getFromLink($_GET['id_barang']);
                $barangNama = $_GET['nama_barang'];
                $barangID = $_GET['id_barang'];
                //$nama_barang = $Model->getFromLink($_GET['nama_barang']);
        }
    ?>
        <form name="Peminjaman" onsubmit="return validatePeminjamanForm()" action="../controller/InputPemesanan.php" method="POST">
            <?php if(isset($_GET['id_barang'])){ foreach($barangID as $id_barang){?>
            <input id="hidden" name="id_barang[]" type="hidden" value="<?=$id_barang?>">
            <?php }foreach($barangNama as $nama_barang){?> <br>
            <label for="hidden" style="background-color: #f1f1f1; padding:10px 10px;">Barang yang dipesan : <?=$nama_barang?></label>
            <br>
            <?php }} ?>
            <br>
            <div style="float:left; margin-left:-150px">
            <table class="listform" >
                <tr>
                    <td><h3>No_identitas :</h3></td>
                    <td><input onchange="autoFill(this.value)" id="no_identitas" name="no_identitas"  type="text" class="form" value="">
                    <span id="no_identitasErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Nama user:</h3></td>
                    <td><input id="namauser" name="namauser"  type="text" class="form" value="">
                    <span id="namauserErr" class="error">*</span></td></td>
                </tr>
                <tr>
                    <td><h3>Pekerjaan:</h3></td>
                    <td><input id="pekerjaan" name="pekerjaan"  type="text" class="form" value="">
                    <span id="pekerjaanErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Alamat:</h3></td>
                    <td><input id="alamat" name="alamat"  type="text" class="form" value="">
                    <span id="alamatErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Telepon:</h3></td>
                    <td><input id="telepon" name="telepon"  type="text" class="form" value="">
                    <span id="teleponErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Fakultas:</h3></td>
                    <td><input id="fakultas" name="fakultas"  type="text" class="form" value=""></td>
                </tr>
                <tr>
                    <td><h3>Jurusan:</h3></td>
                    <td><input id="jurusan" name="jurusan"  type="text" class="form" value=""></td>
                </tr>
            </table>
            </div><div style="float:left; margin-left: 50px">
            <table class="listform">
                <tr>
                    <td><h3>Status:</h3></td>
                    <td>
                    <select id="status" name="status" class="form">
                        <option value="sedang dipesan">sedang dipesan</option>
                        <span id="statusErr" class="error">*</span>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><h3>Tanggal awal:</h3></td>
                    <td><input id="tglawal" name="tglawal"  type="date" class="form" >
                    <span id="tglawalErr" class="error">*</span></td>
                </tr>
                <tr>
                    <td><h3>Tanggal akhir:</h3></td>
                    <td><input id="tglakhir" name="tglakhir"  type="date" class="form" ></td>
                </tr>
            </table>
            </div>
            <br>
            <?php if(isset($id_barang)){ ?>
            <input type="submit"   style="position:absolute; margin-top: -70px; margin-left: -30px;
                   " class="submit" value="Insert">
            <?php } ?>
            </form>
        <?php if(!isset($id_barang)){ ?>
            <a href="tambahbarangpemesanan.php"><button class="submit" style="position:absolute; margin-top: 
            -85px; margin-left: -170px;">Tambah barang </button></a>
        <?php } ?>

    </div>
    
</section>
</body>
<script src="../assets/js/validate.js"></script>
</html>

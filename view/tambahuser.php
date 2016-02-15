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
        <a >Membuat User</a>
    </h2>
</div>

<br>
         
        <form name="user" onsubmit="return validateUserForm()" action="../controller/InputUser.php" method="POST">
            <br>
            <div style="float:left; margin-left:-150px">
            <table class="listform" >
                <tr>
                    <td><h3>No_identitas :</h3></td>
                    <td><input id="no_identitas" name="no_identitas"  type="text" class="form" value="">
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
            </div>
            <br>
            <input type="submit"   style="position:absolute; margin-top: -70px;
                   " class="submit" value="Insert">
        </form>
    </div>
</section>
</body>
<script src="../assets/js/validate.js"></script>
</html>

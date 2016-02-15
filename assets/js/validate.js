function confirmDelete(string){
    if (confirm("apakah anda mau mendelete pertanyaan ini ? ")) {
        document.location = "delete.php?id="+string;
    }
}
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
function validatePeminjamanForm() {
    var v;
    var w = document.forms["Peminjaman"]["no_identitas"].value;
    var x = document.forms["Peminjaman"]["namauser"].value;
    var y = document.forms["Peminjaman"]["pekerjaan"].value;
    var z = document.forms["Peminjaman"]["alamat"].value;
    var a = document.forms["Peminjaman"]["telepon"].value;
    var b = document.forms["Peminjaman"]["status"].value;
    var d = document.forms["Peminjaman"]["tglawal"].value;
    if (w == null || w == "") {
        document.getElementById("no_identitasErr").innerHTML = "*no_identitas kosong";
        v= false;
    }
    else{
        document.getElementById("no_identitasErr").innerHTML = "*";
    }
    if (x == null || x == "" ){
        document.getElementById("namauserErr").innerHTML = "*namauser kosong";
        v= false;
   }
   else{
        document.getElementById("namauserErr").innerHTML = "*";

    }
    if (y == null || y == "") {
        document.getElementById("pekerjaanErr").innerHTML = "*pekerjaan kosong";
        v= false;
    }
    else{
        document.getElementById("pekerjaanErr").innerHTML = "*";
    }
    if (z == null || z == "") {
        document.getElementById("alamatErr").innerHTML = "*alamat kosong";
        v= false;
    }
    else{
        document.getElementById("alamatErr").innerHTML = "*";
    }
    if (a == null || a == "") {
        document.getElementById("teleponErr").innerHTML = "*telepon kosong";
        v= false;
    }
    else{
        document.getElementById("teleponErr").innerHTML = "*";
    }
    if (b == null || b == "") {
        document.getElementById("statusErr").innerHTML = "*status kosong";
        v= false;
    }
    else{
        document.getElementById("statusErr").innerHTML = "*";
    }
    if (d == null || d == "") {
        document.getElementById("tglawalErr").innerHTML = "* tanggal awal kosong";
        v= false;
    }
    else{
        document.getElementById("tglawalErr").innerHTML = "*";
    }
    return v;
}

function validateUserForm() {
    var v;
    var w = document.forms["user"]["no_identitas"].value;
    var x = document.forms["user"]["namauser"].value;
    var y = document.forms["user"]["pekerjaan"].value;
    var z = document.forms["user"]["alamat"].value;
    var a = document.forms["user"]["telepon"].value;
    if (w == null || w == "") {
        document.getElementById("no_identitasErr").innerHTML = "*no_identitas kosong";
        v= false;
    }
    else{
        document.getElementById("no_identitasErr").innerHTML = "*";
    }
    if (x == null || x == "" ){
        document.getElementById("namauserErr").innerHTML = "*namauser kosong";
        v= false;
   }
   else{
        document.getElementById("namauserErr").innerHTML = "*";

    }
    if (y == null || y == "") {
        document.getElementById("pekerjaanErr").innerHTML = "*pekerjaan kosong";
        v= false;
    }
    else{
        document.getElementById("pekerjaanErr").innerHTML = "*";
    }
    if (z == null || z == "") {
        document.getElementById("alamatErr").innerHTML = "*alamat kosong";
        v= false;
    }
    else{
        document.getElementById("alamatErr").innerHTML = "*";
    }
    if (a == null || a == "") {
        document.getElementById("teleponErr").innerHTML = "*telepon kosong";
        v= false;
    }
    else{
        document.getElementById("teleponErr").innerHTML = "*";
    }
    return v;
}

function validateBarangForm() {
    var v;
    var w = document.forms["barang"]["nama_barang"].value;
    var x = document.forms["barang"]["status"].value;
    var y = document.forms["barang"]["lokasi"].value;
    if (w == null || w == "") {
        document.getElementById("nama_barangErr").innerHTML = "*nama barang kosong";
        v= false;
    }
    else{
        document.getElementById("nama_barangErr").innerHTML = "*";
    }
    if (x == null || x == "" ){
        document.getElementById("statusErr").innerHTML = "*status kosong";
        v= false;
   }
   else{
        document.getElementById("statusErr").innerHTML = "*";

    }
    if (y == null || y == "") {
        document.getElementById("lokasiErr").innerHTML = "*lokasi kosong";
        v= false;
    }
    else{
        document.getElementById("lokasiErr").innerHTML = "*";
    }
    return v;
}


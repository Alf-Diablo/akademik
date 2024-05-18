<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalambasisdata.
 require_once "KoneksiDB.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
    //ambil data dari form, simpan dalam variabel
    $nip=$_POST['nip']; //yg didalam tanda kutip harus sama dengan name diform
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgllahir=$_POST['tgllahir'];
    $mtkul=$_POST['mtkul'];
    $email=$_POST['email'];
    $nohp=$_POST['nohp'];
    $umur=$_POST['umur'];
    //buat SQL untuk simpan data
    $sqlupdate="UPDATE tbldsn SET nama='$nama', alamat='$alamat', tgllahir='$tgllahir', mtkul='$mtkul', email='$email', nohp='$nohp', umur='$umur' WHERE nip='$nip'";
    //Proses ke mysql server, menggunakan mysqli_query()
    if(mysqli_query($koneksi,$sqlupdate)){
    //redirect ke halaman tampildata.php jika proses simpan berhasil
    echo "<script> alert('Data sudah diupdate');
    window.location.assign('TampilData2.php'); </script>";
    }
    }
 
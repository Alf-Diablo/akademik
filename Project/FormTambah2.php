<h2>Tambah Data Dosen</h2>
 <!-- tag form -->
 <form action="Save2.php" method="POST">
    <label>Nomor Induk Dosen :</label>
    <input type="text" name="nip" placeholder="Nomor Induk Dosen" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Tanggal Lahir :</label>
    <input type="date" name="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required>
    <br>
    <label for="">Mata Kuliah :</label>
    <select name="mtkul" id="mtkul">
        <option value="Web Programming">Web Programming</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Pemrograman Visual">Pemrograman Visual</option>
        <option value="Desain Web">Desain Web</option>
    </select>
    <br>
    <label for="">Email :</label>
    <input type="text" name="email" id="email" placeholder="Email" required>
    <br>
    <label for="">No Hp :</label>
    <input type="text" name="nohp" id="nohp" placeholder="No Hp" required>
    <br>
    <label for="">Umur :</label>
    <input type="number" name="umur" id="umur" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form> 
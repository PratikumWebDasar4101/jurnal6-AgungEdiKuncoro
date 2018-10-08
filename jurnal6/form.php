<?php
	require("config.php");
?>
<h2>Isi Data Diri</h2>
<form method="post" enctype="multipart/form-data">
    <pre>
        NIM            : <input type="text" name="nim" id="nim"><br>
        Nama           : <input type="text" name="nama" id="nama"><br>
        Kelas          : <input type="radio" name="kelas" id="kelas" value="41-01">41-01
                         <input type="radio" name="kelas" id="kelas" value="41-02">41-02
                         <input type="radio" name="kelas" id="kelas" value="41-03">41-03
                         <input type="radio" name="kelas" id="kelas" value="41-04">41-04<br>
        Jenis Kelamin  : <input type="radio" name="gender" value="Laki-laki">Laki-laki
                         <input type="radio" name="gender" value="Perempuan">Perempuan <br>
        <!-- Hobi           : <input type="checkbox" name="Menyanyi[]" value="Menyanyi">Menyanyi
                         <input type="checkbox" name="Menggambar[]" value="Menggambar">Menggambar
                         <input type="checkbox" name="Membaca[]" value="Membaca">Membaca<br> -->
        Fakultas       : <select name="fakultas" id="fakultas">
                            <option value="FIT">Fakultas Ilmu Terapan</option>
                            <option value="FEB">Fakultas Ekonomi Bisnis</option>
                            <option value="FKB">Fakultas Komunikasi Bisnis</option>
                            <option value="FIK">Fakultas Industri Kreatif</option>
                            <option value="FRI">Fakultas Rekayasa Industri</option>
                            <option value="FTE">Fakultas Teknik Elektro</option>
                            <option value="FIF">Fakultas Informatika</option>
                        </select><br>
        Alamat         : <textarea name="alamat" id="alamat"></textarea>
                         <input type="submit" name="submit" value="Submit">
        
    </pre>
</form>

<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $gender = $_POST['gender'];
        $fakultas = $_POST['fakultas'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO mahasiswa (nim,nama,kelas,gender,fakultas,alamat) VALUES ('$nim','$nama','$kelas','$gender','$fakultas','$alamat')";

        if(mysqli_query($conn,$sql)){
			echo "sukses";
		} else {
				echo "Error ".$sql.mysqli_error($conn);
        }
    }
?>
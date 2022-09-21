<h1>Tambah Data</h1>
<form action="input-data-nilai-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12003102" /><br>

    <label for="nama_lengkap">Nama Lengkap :</label><br>
    <input type="text" name="nama_lengkap" placholder="Ex. Firdaus" /><br>

    <label for="kelas">Kelas :</label><br>
    <input type="text" name="kelas"/><br>
    
    <label for="kehadiran">Kehadiran :</label><br>
    <input type="number" name="kehadiran" placeholder=><br>

    <label for="tugas">Tugas :</label><br>
    <input type="number" name="tugas" placeholder=><br>

    <label for="uts">UTS :</label><br>
    <input type="number" name="uts" placholder="Ex. Firdaus"><br>

    <label for="uas">UAS :</label><br>
    <input type="number" name="uas" /><br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-data-nilai.php">Kembali</a>
</form>

<?php
    if(isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];
        

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO siswa_nilai VALUES
                ('$nis', '$nama_lengkap', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
            ";

            include ('./input-nilai-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='input-data-nilai.php';
                    </script>
                ";
            }
    }
?>

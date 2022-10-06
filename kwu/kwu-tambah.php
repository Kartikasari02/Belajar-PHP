<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang">Kodebarang :</label><br>
    <input type="number" name="kodebarang" placeholder="Ex. 1112131415" /><br>

    <label for="tanggal">Tanggal :</label><br>
    <input type="date" name="tanggal" placholder="Ex. Firdaus" /><br>

    <label for="pembeli">Pembeli :</label><br>
    <input type="text" name="pembeli"/><br>
    
    <label for="namabarang">Namabarang :</label><br>
    <input type="text" name="namabarang" placeholder=><br>

    <label for="qty">qty :</label><br>
    <input type="number" name="qty" placeholder=><br>

    <label for="hargabeli">Hargabeli :</label><br>
    <input type="number" name="hargabeli" placholder="Ex. Firdaus"><br>

    <label for="hargajual">Hargajual :</label><br>
    <input type="number" name="hargajual" /><br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-data-nilai.php">Kembali</a>
</form>

<?php
    if(isset($_POST["simpan"])) {
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];
        

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO transaksi VALUES
                ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
            ";

            echo $query;
            include ('./kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='kwu.php';
                        </script>
                  ";
            }
    }
?>
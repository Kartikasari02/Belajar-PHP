<form action="rumus-jargen.php" method="POST">
    <h1>Rumus luas dan keliling Jajar Genjang</h1>
    <p>Luas</p>
    <input type="number" name="alas" placeholder="Alas">
    <input type="number" name="tinggi" placeholder="Tinggi">
    <p>Keliling</p>
    <input type="number" name="panjang" placeholder="panjang">
    <input type="number" name="lebar" placeholder="lebar">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($panjang + $lebar);

        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "luas jajar genjang = $luas <br>"; 
        echo "panjang = $panjang <br>";
        echo "lebar = $lebar <br>";
        echo "keliling jajar gejang = $keliling <br>"; 
    }
?>
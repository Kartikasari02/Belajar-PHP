<form action="rumus-segitiga.php" method="POST">
    <h1>Rumus luas dan keliling Segitiga</h1>
    <p>Luas</p>
    <input type="number" name="a" placeholder="a">
    <input type="number" name="t" placeholder="t">
    <p>Keliling</p>
    <input type="number" name="s" placeholder="s">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $alas = $_POST["a"];
        $tinggi = $_POST["t"];
        $sisi = $_POST["s"];
        $b = 1/2;
        $luas = 1/2 * $alas * $tinggi;
        $keliling = $sisi + $sisi + $sisi;

        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "luas segitiga = $luas <br>"; 
        echo "sisi = $sisi <br>";
        echo "keliling segitiga= $keliling <br>";

        echo "<hr>";
        echo "Rumus Luas Segitiga = 1/2 x a x t <br>";
        echo "Rumus Keliling Segitiga = s + s + s";

    }
?>
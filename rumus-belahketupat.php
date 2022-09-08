<form action="rumus-belahketupat.php" method="POST">
    <h1>Rumus luas dan keliling Belah Ketupat</h1>
    <p>Luas</p>
    <input type="number" name="d1" placeholder="d1">
    <input type="number" name="d2" placeholder="d2">
    <p>Keliling</p>
    <input type="number" name="s" placeholder="s">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $d1 = $_POST["d1"];
        $d2 = $_POST["d1"];
        $sisi = $_POST["s"];
        $luas = 1/2 * $d1 * $d2;
        $keliling = 4 * $sisi;

        echo "d1 = $d1 <br>";
        echo "d2 = $d2 <br>";
        echo "luas layanglayang = $luas <br>"; 
        echo "sisi = $sisi <br>";
        echo "keliling segitiga= $keliling <br>";

        echo "<hr>";
        echo "Rumus Luas Belah ketupat =1/2 x d1 x d2 <br>";
        echo "Rumus Keliling Belah ketupat = 4 x s";

    }
?>
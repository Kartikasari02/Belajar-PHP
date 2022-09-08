<form action="rumus-layanglayang.php" method="POST">
    <h1>Rumus luas dan keliling Layang-layang</h1>
    <p>Luas</p>
    <input type="number" name="d1" placeholder="d1">
    <input type="number" name="d2" placeholder="d2">
    <p>Keliling</p>
    <input type="number" name="AB" placeholder="AB">
    <input type="number" name="AD" placeholder="AD">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $d1 = $_POST["d1"];
        $d2 = $_POST["d1"];
        $AB = $_POST["AB"];
        $AD = $_POST["AD"];
        $b = 1/2;
        $luas = 1/2 * $d1 * $d2;
        $keliling = 2 * ($AB + $AD);

        echo "d1 = $d1 <br>";
        echo "d2 = $d2 <br>";
        echo "luas layanglayang = $luas <br>"; 
        echo "AB = $AB <br>";
        echo "AD = $AD <br>";
        echo "keliling segitiga= $keliling <br>";

        echo "<hr>";
        echo "Rumus Luas layang-layang =1/2 x d1 x d2 <br>";
        echo "Rumus Keliling layang-layang = 2 x (AB + AD)";

    }
?>
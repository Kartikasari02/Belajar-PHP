<form action="rumus-persegipanjanng.php" method="POST">
    <h1>Rumus luas dan keliling Persegi Panjang</h1>
    <p>panjang</p>
    <input type="number" name="p" placeholder="5">
    <p>lebar</p>
    <input type="number" name="l" placeholder="5">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";

        $p = $_POST["p"];
        $l = $_POST["l"];
        $luas = $p * $l;
        $keliling = 2 * ($p + $l);

        echo "p = $p <br>";
        echo "l = $l <br>";
        echo "luas persegi panjang = $luas <br>"; 
        echo "keliling persegi panjang= $keliling <br>";

        echo "<hr>";
        echo "Rumus Luas persegi panjang = P x L";
        echo "Rumus Keliling persegi panjanng = 2 x (P + L)";

    }
?>
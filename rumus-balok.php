<form action="rumus-balok.php" method="POST">
    <h1>Rumus volume balok</h1>
    <p>volume</p>
    <input type="number" name="p" placeholder="p">
    <input type="number" name="l" placeholder="l">
    <input type="number" name="t" placeholder="t">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $p = $_POST["p"];
        $l = $_POST["l"];
        $t = $_POST["t"];
        $volume = $p * $l * $t;

        echo "p = $p <br>";
        echo "l = $l <br>";
        echo "t = $t <br>";
        echo "volume balok= $volume <br>";

        echo "<hr>";
        echo "Rumus volume balok : p x l x t";

    }
?>
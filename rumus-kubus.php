<form action="rumus-kubus.php" method="POST">
    <h1>Rumus volume kubus</h1>
    <p>volume</p>
    <input type="number" name="s" placeholder="s">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $s = $_POST["s"];
        $volume = $s * $s * $s;

        echo "s = $s <br>";
        echo "volume kubus= $volume <br>";

        echo "<hr>";
        echo "Rumus volume kubus : s x s x s";

    }
?>
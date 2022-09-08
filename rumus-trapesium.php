<form action="rumus-trapesium.php" method="POST">
    <h1>Rumus luas dan keliling Trapesium</h1>
    <p>Luas</p>
    <input type="number" name="jumlah_sisi_sejajar" placeholder="jumlah sisi sejajar">
    <input type="number" name="tinggi" placeholder="tinggi">
    <p>Keliling</p>
    <input type="number" name="AB" placeholder="AB">
    <input type="number" name="BC" placeholder="BC">
    <input type="number" name="CD" placeholder="CD">
    <input type="number" name="DA" placeholder="DA">
    <input type="submit" name="proses" value="hitung">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $jumlah_sisi_sejajar = $_POST["jumlah_sisi_sejajar"];
        $tinggi = $_POST["tinggi"];
        $AB = $_POST["AB"];
        $BC = $_POST["BC"];
        $CD = $_POST["CD"];
        $DA = $_POST["DA"];                                            
        $luas = 1/2 * $jumlah_sisi_sejajar * $tinggi;
        $keliling = $AB + $BC + $CD + $DA;

        echo "jumlah sisi sejajar = $jumlah_sisi_sejajar <br>";
        echo "tinggi = $tinggi <br>";
        echo "luas trapesium = $luas <br>"; 
        echo "AB = $AB <br>";
        echo "BC = $BC <br>";
        echo "CD = $CD <br>";
        echo "DA = $DA <br>";
        echo "keliling trapesium = $keliling <br>";

        echo "<hr>";
        echo "Rumus Luas Belah ketupat =1/2 x jumlah sisi sejajar x tinggi <br>";
        echo "Rumus Keliling Belah ketupat = AB + BC + CD + DA";

    }
?>
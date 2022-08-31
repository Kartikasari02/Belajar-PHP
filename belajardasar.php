<?php
    // Variabel
    // $1nama; Contoh salah (karena diawali angka)
    // $#nama; Contoh salah (Karena ada simbol ditengah)
    // nama; Contoh salah (tidak ada simbol $)
    $nama = "Rizki";
    $usia = 16;
    echo "Nama saya $nama <br>";
    echo "Usia saya $usia tahun";
    // Tipe data (interger,Float,string)
    // (Boolean,Array)
    $namalengkap = "Rizky giant 90"; //String
    $umur = 15; //integer
    $nilai = 76.56; //Float
    $jomblo = TRUE; //Boolean (TRUE/FALSE)

    // Array String
    $namarpl11 = array("alya", "dwi", "eben");

    echo "Nama Lengkap : $namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    echo "Jomblo : $jomblo <br>";
    echo "<hr>";
    echo "Array 0 : $namarpl11[0] <br>"; //alya
    echo "Array 2 : $namarpl11[2] <br>"; //eben
    echo "<hr>";

    //Operator (+ - / * %)
    $angka1 = 10;
    $angka2 = 5;

    echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "Kurang :" . $kurang = $angka1 - $angka2 . "<br>";
    echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "Sisa Bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";

    //Operator Perbandinagan (=, >, <, !=, ==, ===)
    //Return TRUE(1), FALSE(NULL)
    $a = 10;
    $b = 5;

    echo "== :"; $a == $b; echo "<br>";
    echo "> :"; $a > $b; echo "<br>";
    echo "< :"; $a < $b; echo "<br>";
    echo "!= :"; $a != $b; echo "<br>";
    echo "=== :"; $a === $b; echo "<br>";

    //Operator Logika (AND, OR, &&, ||)
    // IF ELSE

    $x = 10;
    $y = 20;

    if ($x == 10 AND $y == 20){echo "Terpenuhi 2 Variabel <hr>";}
    if ($x == 10 OR $y == 10){echo "Salah satu Variable Terpenuhi <hr>";}
    
    ?>
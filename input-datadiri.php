<form action="input-datadiri.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12003102" /><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input type="date" name="tanggal_lahir" /><br>
    
    <label for="nilai">Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56"/><br>

    <input type="submit" name="simpan" value="Simpan Data"/>

    <?php 
        include('./input-config.php');
        echo "<hr>";
        //Menampilkan data dari databases
        $no= 1;
        $tabeldata = "";
        $data = mysqli_query($mysqli, "SELECT * FROM datadiri ");
        while($row = mysqli_fetch_array($data)){
            $tabeldata .="
                <tr>
                    <td>".$row["nis"]."</td>
                    <td>".$row["namalengkap"]."</td>
                    <td>".$row["tanggal_lahir"]."</td>
                    <td>".$row["nilai"]."</td>
                </tr>
            ";
            $no++;
        }

        echo "
            <table cellpadding=5 border=1 cellspacing=0>
                <tr>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal_lahir</th>
                    <th>Nilai</th>
                </tr>
                $tabeldata
            </tabel>
        ";
    ?>


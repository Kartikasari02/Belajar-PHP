<?php 
        include('./input-config.php');
        echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
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
                    <td>
                        <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                        &nbsp;-&nbsp;
                        <a href='input-datadiri-hapus.php?nis=".$row["nis"]."'
                        onclick='return confirm(\"Yakin Hapus?\");'>Hapus</a>
                    <td>
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
                    <th>Aksi</th>
                </tr>
                $tabeldata
            </tabel>
        ";
    ?>


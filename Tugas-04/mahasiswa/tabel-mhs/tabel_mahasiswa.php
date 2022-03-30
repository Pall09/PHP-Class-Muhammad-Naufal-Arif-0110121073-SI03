<table class="table table-hover table-responsive text-nowrap">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once "class_mahasiswa.php";
            $mhs1 = new Mahasiswa("Faiz Fikri", "02011");
            $mhs2 = new Mahasiswa("Alissa Khairunnisa", "02012");
            $mhs3 = new Mahasiswa("Rosale Naurah", "01011");
            $mhs4 = new Mahasiswa("Delgi Muhammad", "01012");

            $mhs1->prodi = "TI";
            $mhs1->tahunAngkatan = "2012";
            $mhs1->ipk = 3.8;
            
            $mhs2->prodi = "TI";
            $mhs2->tahunAngkatan = "2012";
            $mhs2->ipk = 3.9;

            $mhs3->prodi = "SI";
            $mhs3->tahunAngkatan = "2010";
            $mhs3->ipk = 3.46;

            $mhs4->prodi = "SI";
            $mhs4->tahunAngkatan = "2010";
            $mhs4->ipk = 3.2;

            $ar_mhs = [$mhs1, $mhs2, $mhs3, $mhs4];
            $i = 1;
            foreach ($ar_mhs as $values){
                echo "<tr>";
                echo "<td>". $i ."</td>";
                echo "<td>". $values->nim ."</td>";
                echo "<td>". $values->nama ."</td>";
                echo "<td>". $values->prodi ."</td>";
                echo "<td>". $values->tahunAngkatan ."</td>";
                echo "<td>". $values->ipk ."</td>";
                echo "<td>". $values->predikat_ipk() ."</td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </tbody>
</table>
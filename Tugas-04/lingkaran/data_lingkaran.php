<?php
    require_once "class_lingkaran.php";

    echo "Nilai PHI : ". Lingkaran::PHI;
    $lingkaranSatu = new Lingkaran(10);
    $lingkaranDua = new Lingkaran(4);

    echo "<br>Luas Lingkaran Satu : ". $lingkaranSatu->getLuas();
    echo "<br>Keliling Lingkaran Satu : ". $lingkaranSatu->getKeliling();
    
    echo "<hr>";

    echo "Luas Lingkaran Dua : ". $lingkaranDua->getLuas();
    echo "<br>Keliling Lingkaran Dua : ". $lingkaranDua->getKeliling();
?>
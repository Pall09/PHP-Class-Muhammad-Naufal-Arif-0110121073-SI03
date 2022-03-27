<?php
    require_once "class_persegi.php";

    $persegiSatu = new Persegi(35, 5);
    $persegiDua = new Persegi(27, 9);
    
    echo "PERSEGI SATU";
    echo "<br>Panjang : ". $persegiSatu->panjang;
    echo "<br>Lebar : ". $persegiSatu->lebar;

    echo "<br>Luas Persegi : ". $persegiSatu->getLuas();
    echo "<br>Keliling Persegi : ". $persegiSatu->getKeliling();
    
    echo "<hr>";

    echo "PESEGI DUA";
    echo "<br>Panjang : ". $persegiDua->panjang;
    echo "<br>Lebar : ". $persegiDua->lebar;

    echo "<br>Luas Persegi : ". $persegiDua->getLuas();
    echo "<br>Keliling Persegi : ". $persegiDua->getKeliling();

?>
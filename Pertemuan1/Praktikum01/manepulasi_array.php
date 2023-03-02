<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];
//mengurutkan nilai suatu array
sort($arrayBuah);

//menghapus nilai array yang paling akhir
array_pop($arrayBuah);

//menghapus keseluruhan isi variabel
//bisa juga menghapus spesifik isi variabel itu
unset($arrayBuah[1]);

// gunanya untuk menambahkan nilai array paling belakang 
array_push($arrayBuah, "Durian");

//menghapus nilai array yang paling depan/awal
array_shift($arrayBuah);

//menambahkan nilai array paling depan
array_unshift($arrayBuah, "Semangka");

$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}
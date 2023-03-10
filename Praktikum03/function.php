<?php
function hitungUmur($tahunLahir = 2000, $tahunSekarang = 2023)
{
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2002, 2023);
echo "<br>";
hitungUmur(1990, 20023);
echo "<br>";
hitungUmur(1918, 2023);
echo "<br>";
hitungUmur ();

// fungsi kedua
function greeting ($nama)
{
    return "Hai, namaku $nama !";
}
echo greeting("sania");

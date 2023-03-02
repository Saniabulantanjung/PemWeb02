<?php
//asosiatif array
$profileArray = [
    "nama" => "Sania", 
    "Kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["Kelas"] . "<br>";

echo "";

$profileMultiArray = [
    [
        "nama" => "Sania",
        "semester" => 2
    ], [
        "nama" => "wilda",
        "semester" => 8
    ], [
        "nama" => "Mona",
        "semester"=> 4
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";

}
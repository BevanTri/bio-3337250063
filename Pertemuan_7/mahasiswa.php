<?php
$mahasiswa = [
    "nama"  => "Bevan Tri Ramadiyas",
    "nim"   => "33337250063",
    "prodi" => "Informatika",
    "ipk"   => 3.85,
    "skill" => ["HTML", "CSS", "JavaScript", "Python", "PHP"],
];

echo $mahasiswa["nama"];
echo "<br>";
echo $mahasiswa["ipk"];
echo "<br><br>";

$daftar = [
    ["nama" => "Bevan",  "ipk" => 3.85],
    ["nama" => "Raditya",   "ipk" => 3.72],
    ["nama" => "Sherly", "ipk" => 3.91],
];

foreach ($daftar as $mhs) {
    echo "{$mhs['nama']} — IPK: {$mhs['ipk']}<br>";
}
?>
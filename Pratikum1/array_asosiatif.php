<?php
// membuat array asosiatif (terdiri dari key & value)
$mhs = [
    'nama' => 'Sitanjung', 
    'nim' => '011', 
    'prodi' => 'si'
    'ips' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0,
    ],
];
// memanggil array asosiatif
echo "Nama : " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs ['ips'] [1];
echo "<br> IPS semester 2: " . $mhs ['ips'] [2];
echo "<br> IPS semester 3: " . $mhs [ips''] [3];
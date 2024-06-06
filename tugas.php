<?php
$daftarNilaiUjian = array(80,89,89,87,79,90,91,90,89,82,84,87,88,88,90,80,79,75,67,68,65,80,90,97,99,86,75,76,79,86,97,94,93,92,50,55,90,95,68,89,79,69,58);
for ($x = 0; $x < count($daftarNilaiUjian); $x++){
    if ($daftarNilaiUjian[$x] == 75){
        echo "Absen ke " . $x+1 . " Mendapatkan nilai KKM <br>";
    } elseif ($daftarNilaiUjian[$x] < 75){
        echo "Absen ke " . $x+1 . " harus mengikuti remidi <br>";
    } else {
        echo "Absen ke " . $x+1 . " Mendapatkan nilai di atas KKM <br>";
    }
}
?>



<?php
$daftarHargaDanDiskon = array(
    array("Roti", 6000, false),
    array("Susu", 8000, true),
    array("Parfum", 15000, true),
    array("Madu", 20000, true),
    array("Bantal", 30000, false),
    array("Sapu", 15000, false),
    array("Sepatu", 70000, true),
    array("Sandal", 17500, false),
    array("Tepung", 6000, false),
    array("Gula", 8000, false),
    array("Tas", 100000, true),
    array("Celana", 40000, true)
);

for ($row = 0; $row < count($daftarHargaDanDiskon); $row++){
    for ($col = 0; $col < count($daftarHargaDanDiskon[$row]); $col++){
        if($col == 0){
            echo $daftarHargaDanDiskon[$row][$col] . " dengan harga ";
        } elseif($col == 1){
            echo $daftarHargaDanDiskon[$row][$col] . " ";
        } else {
            echo $daftarHargaDanDiskon[$row][$col] ? "mendapatkan diskon" : "tidak mendapatkan diskon";
            echo "<br>";
        }
    }
}
?>

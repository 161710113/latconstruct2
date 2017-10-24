<?php
require_once "datahp.php";
$data = new data ('Xiaomi','2010','32','4','16','4100');
echo "Merk Handphone " . $data->get_merk()."<br>";
echo "Tahun Rilisnya " . $data->get_tahunpeluncuran()."<br>";
echo "Memiliki Memori Internal Sebesar " . $data->get_memoriinternal()." Gb<br>";
echo "Dengan Ram " . $data->get_ram()."Gb<br>";
echo "Memilliki Kamera Dengan " . $data->get_kamera()." Mega Pixel<br>";
echo "Baterainya Sebesar " . $data->get_baterai()." MAH<br>";
?>
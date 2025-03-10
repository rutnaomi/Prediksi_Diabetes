<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_tekanan = intval($_POST["tekanan_darah"]);

    if ($input_tekanan < 90) {
        echo "<h2>Hasil Prediksi</h2>";
        echo "<p>Tekanan Darah: <strong>$input_tekanan mmHg</strong></p>";
        echo "<p>Status Kesehatan Jantung Andaa: <strong>Di luar prediksi. Tekanan darah terlalu rendah!😮 Yang bener ajee?!</strong></p>";
    } else {
        // Data pasangan (tekanan darah sistolik, kondisi jantung)
        $data = [
            [105, 1], [95, 1], [115, 1], [102, 1], [125, 1], 
            [135, 0], [144, 0], [171, -1], [200, -1], [230, -1], 
            [180, -1], [175, -1], [112, 1], [145, 0], [161, 0], 
            [92, 1], [99, 1], [133, 0], [139, 0], [128, 1]
        ];

        $min_selisih = PHP_INT_MAX;

        // nah ini untuk mencari nilai tekanan darah terdekat
        foreach ($data as $pasien) {
            $tekanan = $pasien[0];
            $kondisi = $pasien[1];

            $selisih = abs($tekanan - $input_tekanan);
            if ($selisih < $min_selisih) {
                $min_selisih = $selisih;
                $status = $kondisi;
            }
        }

        // Menentukan status kesehatan pasiennya
        if ($status == 1) {
            $prediksi = "Sehat. Terus jaga kesehatanmuu, jangan lupa makan buah dan sayur bro🍎💪";
        } elseif ($status == 0) {
            $prediksi = "Meragukan, lakukan pemeriksaan detail📑";
        } elseif ($status == -1) {
            $prediksi = "Bermasalah. Segera konsultasi ke dokter, yaa❗";
        }

        echo "<h2>Hasil Prediksi</h2>";
        echo "<p>Tekanan Darah: <strong>$input_tekanan mmHg</strong></p>";
        echo "<p>Status Kesehatan Jantung Andaa: <strong>$prediksi</strong></p>";
    }
}

?>
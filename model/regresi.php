<?php
// Data training berisi pasangan nilai ujian dan nilai akhir siswa
$nilai_ujian = [80, 85, 70, 90, 95]; // Contoh nilai ujian
$nilai_akhir = [85, 88, 72, 92, 98]; // Contoh nilai akhir yang sesuai

// Fungsi untuk menghitung regresi linier
function hitungRegresiLinier($x, $y) {
    $n = count($x);
    $xMean = array_sum($x) / $n;
    $yMean = array_sum($y) / $n;

    $numerator = 0;
    $denominator = 0;

    for ($i = 0; $i < $n; $i++) {
        $numerator += ($x[$i] - $xMean) * ($y[$i] - $yMean);
        $denominator += pow($x[$i] - $xMean, 2);
    }

    $slope = $numerator / $denominator;
    $intercept = $yMean - ($slope * $xMean);

    return [$slope, $intercept];
}

// Prediksi nilai akhir dengan regresi linier
function prediksiNilaiAkhir($nilai_ujian, $nilai_akhir, $nilai_ujian_prediksi) {
    list($slope, $intercept) = hitungRegresiLinier($nilai_ujian, $nilai_akhir);
    $nilai_akhir_prediksi = ($slope * $nilai_ujian_prediksi) + $intercept;
    return $nilai_akhir_prediksi;
}

// Contoh penggunaan: prediksi nilai akhir untuk nilai ujian 75
$nilai_ujian_prediksi = 75;
$prediksi = prediksiNilaiAkhir($nilai_ujian, $nilai_akhir, $nilai_ujian_prediksi);
echo "Prediksi nilai akhir untuk nilai ujian $nilai_ujian_prediksi: " . round($prediksi, 2);
?>


<?php
$nilai = 90;

if ($nilai > 90) {
    echo "Nilai " .$nilai. " Predikat A+";
}
elseif ($nilai > 80 && $nilai <= 90) {
    echo "Nilai " .$nilai. " Predikat A";
}
elseif ($nilai > 70 && $nilai <= 80) {
    echo "Nilai " .$nilai. " Predikat B+";
}
elseif ($nilai > 60 && $nilai <= 70) {
    echo "Nilai " .$nilai. " Predikat B";
}
elseif ($nilai > 50 && $nilai <= 60) {
    echo "Nilai " .$nilai. " Predikat C+";
}
elseif ($nilai > 40 && $nilai <= 50) {
    echo "Nilai " .$nilai. " Predikat C";
}
elseif ($nilai > 30 && $nilai <= 40) {
    echo "Nilai " .$nilai. " Predikat D";
}
elseif ($nilai <= 30) {
    echo "Nilai " .$nilai. " Predikat E";
}
?>
<?php
    include_once("index.php");

    if (isset($_POST['submit'])) {
        $suhu = $_POST['suhu'];
        $konversi = $_POST['konversi'];

    if ($konversi == "Celcius") {
        $hasil = ($suhu * (9 / 5) + 32);
        echo "<div class='hasil-konversi'>
        Hasil Konversi: <br>
        &degF = (9/5) x &degC + 32 <br>
        &degF = (9/5) x $suhu&deg + 32 <br>
        &degF = $hasil&deg
        </div>";
    } else if ($konversi == "Fahrenheit") {
        $hasil = ($suhu - 32) * (5 / 9);
        echo "<div class='hasil-konversi'>
        Hasil Konversi: <br>
        &degC = (5/9) x (&degF - 32) <br>
        &degC = (5/9) x ($suhu&deg - 32) <br>
        &degC = $hasil&deg
        </div>";
    } else if ($suhu == $konversi) {
        echo "Maaf, Terjadi Kesalahan.";
    }
}
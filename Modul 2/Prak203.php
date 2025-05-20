<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <form action="" method="post">
        Nilai: <input type="text" name="nilai"><br>
        Dari:<br>
        <input type="radio" name="awal" value="celsius">Celsius<br>
        <input type="radio" name="awal" value="fahrenheit">Fahrenheit<br>
        <input type="radio" name="awal" value="reamur">Reamur<br>
        <input type="radio" name="awal" value="kelvin">Kelvin<br>
        Ke:<br>
        <input type="radio" name="akhir" value="celsius">Celsius<br>
        <input type="radio" name="akhir" value="fahrenheit">Fahrenheit<br>
        <input type="radio" name="akhir" value="reamur">Reamur<br>
        <input type="radio" name="akhir" value="kelvin">Kelvin<br>
        
        <button type="submit" name="button">Submit</button>
    </form>

<?php
function fahrenheit_to_celsius($nilai) { return 5 / 9 * ($nilai - 32); }
function fahrenheit_to_kelvin($nilai) { return fahrenheit_to_celsius($nilai) + 273.15; }
function fahrenheit_to_reamur($nilai) { return ($nilai - 32) * 4 / 9; }

function celsius_to_fahrenheit($nilai) { return $nilai * 9 / 5 + 32; }
function celsius_to_kelvin($nilai) { return $nilai + 273.15; }
function celsius_to_reamur($nilai) { return $nilai * 4 / 5; }

function kelvin_to_celsius($nilai) { return $nilai - 273.15; }
function kelvin_to_fahrenheit($nilai) { return kelvin_to_celsius($nilai) * 9 / 5 + 32; }
function kelvin_to_reamur($nilai) { return kelvin_to_celsius($nilai) * 4 / 5; }

function reamur_to_celsius($nilai) { return $nilai * 5 / 4; }
function reamur_to_fahrenheit($nilai) { return reamur_to_celsius($nilai) * 9 / 5 + 32; }
function reamur_to_kelvin($nilai) { return reamur_to_celsius($nilai) + 273.15; }

if (isset($_POST["button"])) {
    $nilai = floatval($_POST["nilai"]);
    $awal = strtolower($_POST["awal"]);
    $akhir = strtolower($_POST["akhir"]);

    function konversi($nilai, $awal, $akhir) {
        if ($awal == $akhir) return $nilai;

        switch ($awal) {
            case 'celsius':
                if ($akhir == 'fahrenheit') return celsius_to_fahrenheit($nilai);
                if ($akhir == 'kelvin') return celsius_to_kelvin($nilai);
                if ($akhir == 'reamur') return celsius_to_reamur($nilai);
                break;
            case 'fahrenheit':
                if ($akhir == 'celsius') return fahrenheit_to_celsius($nilai);
                if ($akhir == 'kelvin') return fahrenheit_to_kelvin($nilai);
                if ($akhir == 'reamur') return fahrenheit_to_reamur($nilai);
                break;
            case 'kelvin':
                if ($akhir == 'celsius') return kelvin_to_celsius($nilai);
                if ($akhir == 'fahrenheit') return kelvin_to_fahrenheit($nilai);
                if ($akhir == 'reamur') return kelvin_to_reamur($nilai);
                break;
            case 'reamur':
                if ($akhir == 'celsius') return reamur_to_celsius($nilai);
                if ($akhir == 'fahrenheit') return reamur_to_fahrenheit($nilai);
                if ($akhir == 'kelvin') return reamur_to_kelvin($nilai);
                break;
        }
        return null;
    }

    switch ($akhir) {
        case 'celsius': $var = '°C'; break;
        case 'fahrenheit': $var = '°F'; break;
        case 'kelvin': $var = 'K'; break;
        case 'reamur': $var = '°R'; break;
        default: $var = ''; break;
    }

    $hasil = konversi($nilai, $awal, $akhir);

    if ($hasil !== null) {
        echo "<h2>Hasil Konversi: $hasil $var</h2>";
    } else {
        echo "<h2>Konversi tidak valid.</h2>";
    }
}
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Nilai : <input type="text" name="nilai"><br>
        <button type="submit" name="button">Konversi</button>
    </form>

    <?php
        
        $nilai = (int)$_POST["nilai"];

        if ($nilai == 0) {
            $var = "nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $var = "satuan";
        } elseif ($nilai >= 10 && $nilai < 20) {
            $var = "belasan";
        } elseif ($nilai >= 20 && $nilai < 100) {
            $var = "puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            $var = "ratusan";
        } elseif ($nilai >= 1000) {
            $var = "Anda Menginput Melebihi Limit Bilangan";
        } else {
            $var = "Input tidak valid";
        }

        echo "<h2>Hasil : $var</h2>";
    
    ?>
</body>
</html>

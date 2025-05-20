<!DOCTYPE html>
<head>
    <style>
        .img-wrapper {
            display: inline-block;
            width: 40px; /* fixed width to align */
        }
        img {
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Tinggi : <input type="number" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="alamat"><br>
        <button type="submit" name="cetak">Cetak</button><br>
    </form> 
    <?php
    if (isset($_POST["cetak"])) {
        $tinggi = (int)$_POST["tinggi"];
        $gambar = $_POST["alamat"];

        $baris = $tinggi;
        while ($baris >= 1) {
            $spasi = $tinggi - $baris;
            for ($i = 0; $i < $spasi; $i++) {
                echo '<span class="img-wrapper"></span>';
            }

            for ($j = 0; $j < $baris; $j++) {
                echo '<span class="img-wrapper"><img src="' . $gambar . '"></span>';
            }

            echo "<br>";
            $baris--;
        }
    }
    ?>
</body>
</html>

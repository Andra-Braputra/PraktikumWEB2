<!DOCTYPE html>
<body>
    <form action="" method="post">
        Jumlah Peserta : <input type="number" name="peserta"><br>
        <button type="submit" name="cetak">Cetak</button><br>
    </form> 
    <?php
    if (isset($_POST["cetak"])) {
        $peserta = (int)$_POST["peserta"];
        $a = 1;
        while ($a <= $peserta) {
            if($a%2==0){
                echo "<h2 style=color:red>Peserta ke-$a</h2>";
            }else
            echo "<h2 style=color:green>Peserta ke-" .$a. "</h2>";            
            
            $a++;
        }
    }
    ?>
</body>
</html>
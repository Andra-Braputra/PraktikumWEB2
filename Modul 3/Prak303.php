<!DOCTYPE html>
<head>
    <style>
        img{
            width: 0.16in;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Batas Atas : <input type="number" name="atas"><br>
        Batas Bawah : <input type="number" name="bawah"><br>
        <button type="submit" name="cetak">Cetak</button><br>
    </form> 
    <?php
    if (isset($_POST["cetak"])) {
        $atas = $_POST["atas"];
        $bawah = $_POST["bawah"];
        $i = 1;
        do {
            if (($atas + 7)%5==0){
                echo '<img src="bintang.png" alt=""> ';
            }else{
                echo $atas." ";
            }
            $atas++;
            
        } while ($atas <= $bawah);   
    }
    ?>
</body>
</html>
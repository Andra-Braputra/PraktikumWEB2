<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td{
                padding: 10px;
            }
        </style>
    </head>
    <form action="" method="post">
        Panjang :<input type="number" name="panjang"><br>
        Lebar :<input type="number" name="lebar"><br>
        Nilai :<input type="text" name="nilai"><br>
        <button type="submit" name="cetak">cetak</button>
    </form>
    <?php
    if(isset($_POST["cetak"])){
        $nilaimatrix = explode(" ", string: $_POST["nilai"]);
        $P = $_POST["panjang"]; 
        $L = $_POST["lebar"];
        $max = $P * $L;
        $jumlah = count($nilaimatrix);

        if ($jumlah == $max) {
            echo "<table>";
            $index = 0;
            for ($i=0; $i < $P; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $L; $j++) { 
                    echo '<td>'. $nilaimatrix[$index] .'</td>';
                    $index++;
                }
                echo "</tr>";
            }
        }else{
            echo "Panjang nilai tidak sesuai dengan ukuran matriks ";
        }

    }
    ?>
</html>
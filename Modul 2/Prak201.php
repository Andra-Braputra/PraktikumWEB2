<!DOCTYPE html>
<body>
    <form action="" method="post">
        Nama : 1 <input type="text" name="nama1" ><br>
        Nama : 2 <input type="text" name="nama2"><br>
        Nama : 3 <input type="text" name="nama3"><br>
        <button type="submit" name="button">Urutkan</button>
    </form>
    <?php
    if (isset($_POST["button"])){
        $n1 = $_POST["nama1"];
        $n2 = $_POST["nama2"];
        $n3 = $_POST["nama3"];
        $nama = array($n1, $n2, $n3);
        sort($nama);
        for($x = 0; $x < 3; $x++){
            echo $nama[$x];
            echo "<br>";
        }
    }
    ?>
</body>
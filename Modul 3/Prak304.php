<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 50px;
        }
    </style>
</head>
<body>

<?php
$jumlah = 0;

$click = isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang']);

if (isset($_POST['submit'])) {
    $jumlah = (int) $_POST['jumlah'];
} elseif (isset($_POST['tambah'])) {
    $jumlah = (int) $_POST['jumlah'] + 1;
} elseif (isset($_POST['kurang'])) {
    $jumlah = (int) $_POST['jumlah'] - 1;
    if ($jumlah < 0) $jumlah = 0;
}

if (!$click) {
    ?>
    <form action="" method="post">
        <label>Jumlah bintang</label>
        <input type="number" name="jumlah"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
}

if ($click) {
    echo "<p>Jumlah bintang $jumlah</p>";

    for ($i = 0; $i < $jumlah; $i++) {
        echo '<img src="bintang.png">';
    }

    echo '
    <form method="post">
        <input type="hidden" name="jumlah" value="' . $jumlah . '">
        <br>
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>';
}
?>

</body>
</html>

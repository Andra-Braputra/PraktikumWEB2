<!DOCTYPE html>
<head>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php
$namaERR = $nimERR = $kelaminERR =  "";
$nama = $nim = $kelamin =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaERR = "Nama tidak boleh kosong";
  } else {
    $nama = test_input($_POST["nama"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimERR = "NIM tidak boleh kosong";
  } else {
    $nim = test_input($_POST["nim"]);
  }
    
  if (empty($_POST["kelamin"])) {
    $kelaminERR = "Kelamin tidak boleh kosong";
  } else {
    $kelamin = test_input($_POST["kelamin"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        nama : <input type="text" name="nama"><span class="error"> * <?php echo $namaERR;?></span><br><br>
        nim : <input type="text" name="nim"><span class="error"> * <?php echo $nimERR;?></span><br><br>
        jenis kelamin : <span class="error"> * <?php echo $kelaminERR;?></span><br>
        <input type="radio" name="kelamin" id="laki" value="Laki-laki">Laki-laki<br>
        <input type="radio" name="kelamin" id="perempuan" value="Perempuan">Perempuan<br><br>
        <button type="submit" name="button">Submit</button>
    </form>
    <?php
    echo "<h2>Output:</h2>";
    echo $nama;
    echo "<br>";
    echo $nim;
    echo "<br>";
    echo $kelamin;
    ?>
</body>
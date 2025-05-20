<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="input">
            <button type="submit" name="submit">Submit</button><br>
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $input = $_POST["input"];
            $panjang = strlen($input);

            echo '<h2>Input:</h2>';
            echo htmlspecialchars($input) . '<br><br>';

            echo '<h2>Output:</h2>';
            for ($i = 0; $i < $panjang; $i++) {
                $karakter = $input[$i];
                $output = strtoupper($karakter);
                $output .= str_repeat(strtolower($karakter), $panjang - 1);
                echo $output ;
            }
        }
        ?>
    </body>
</html>

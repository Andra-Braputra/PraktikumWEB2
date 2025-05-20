<!DOCTYPE html>
<html>
<head>
<title>title</title>
<style>
    table{
        border: 1px solid black;
        padding: 3px;
    }
    td{
        border: 1px solid black;
    }
    
</style>
</head>
<body>
    <?php
    $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5")
    ?>
    <table>
        <tr>
            <td><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <?php
        foreach($samsung as $item) :
        ?>
        <tr>
            <td><?=$item?></td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
</body>
</html>
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
    .judul{
        font-size: 30px ;
        background-color: red;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    
</style>
</head>
<body>
    <?php
    $samsung = array("sam1"=>"Samsung Galaxy S22","sam2"=> "Samsung Galaxy S22+","sam3"=> "Samsung Galaxy A03","sam4"=> "Samsung Galaxy Xcover 5")
    ?>
    <table>
        <tr>
            <td class=judul><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <tr>
            <td><?= $samsung['sam1']?></td>
        </tr>
        <tr>
            <td><?= $samsung['sam2']?></td>
        </tr>
        <tr>
            <td><?= $samsung['sam3']?></td>
        </tr>
        <tr>
            <td><?= $samsung['sam4']?></td>
        </tr>
    </table>
</body>
</html>
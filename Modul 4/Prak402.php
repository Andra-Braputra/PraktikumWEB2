<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td{
                padding-left: 5px;
                padding-right: 40px;
                padding-bottom: 10px;
            }
            .judul{
                background-color: gray;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        $mahasiswa = array(
            array("nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65),
            array("nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79),
            array("nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41),
            array("nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75)
        );
        function huruf($score) {
            if ($score >= 80) {
                return "A";
            } elseif ($score >= 70) {
                return "B";
            } elseif ($score >= 60) {
                return "C";
            } elseif ($score >= 50) {
                return "D";
            } else {
                return "E";
            }
        }
        echo "<table>";
        echo "<tr class ='judul'><td>Nama</td><td>NIM</td><td>UTS</td><td>UAS</td><td>Akhir</td><td>Huruf</td></tr>";
        foreach ($mahasiswa as $data) {
            $akhir = ($data["uts"] * 0.4) + ($data["uas"] * 0.6);
            $huruf = huruf($akhir);
            echo "<tr><td>{$data['nama']}</td><td>{$data['nim']}</td><td>{$data['uts']}</td><td>{$data['uas']}</td><td>$akhir</td><td>$huruf</td></tr>";
        }
        echo "</table>";

        ?>
    </body>
</html>
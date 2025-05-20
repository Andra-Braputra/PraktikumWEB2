<html>
    <head>
        <style>
            .judul{
                background-color: gray;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
$data = [
    "Ridho" => [
        ["mata_kuliah" => "Pemrograman I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Pemrograman I", "sks" => 1],
        ["mata_kuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["mata_kuliah" => "Arsitektur Komputer", "sks" => 3]
    ],
    "Ratna" => [
        ["mata_kuliah" => "Basis Data I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Basis Data I", "sks" => 1]
    ],
    "Tono" => [
        ["mata_kuliah" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["mata_kuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["mata_kuliah" => "Komputasi Awan", "sks" => 3],
        ["mata_kuliah" => "Kecerdasan Bisnis", "sks" => 3]
    ]
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr class ='judul'><th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th></tr>";

$no = 1;
foreach ($data as $nama => $matkul) {
    $total_sks = 0;
    foreach ($matkul as $m) {
        $total_sks += $m['sks'];
    }
    $keterangan = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";

    $rowspan = count($matkul);
    $first = true;
    foreach ($matkul as $m) {
        echo "<tr>";
        if ($first) {
            echo "<td rowspan='$rowspan'>{$no}</td>";
            echo "<td rowspan='$rowspan'>{$nama}</td>";
        }
        echo "<td>{$m['mata_kuliah']}</td>";
        echo "<td>{$m['sks']}</td>";
        if ($first) {
            echo "<td rowspan='$rowspan'>{$total_sks}</td>";
            if ($total_sks < 7) {
                echo "<td style='background-color:red' rowspan='$rowspan'>{$keterangan}</td>";
            } else {
                echo "<td style='background-color:green' rowspan='$rowspan'>{$keterangan}</td>";
            }
            
        }
        echo "</tr>";
        $first = false;
    }
    $no++;
}

echo "</table>";
?>
    </body>
</html>

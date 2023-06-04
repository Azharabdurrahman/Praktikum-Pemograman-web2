<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $data = [
        [
            "nama" => "Andi",
            "NIM" => 2101001,
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "NIM" => 2101002,
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "NIM" => 2101003,
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "NIM" => 2101004,
            "uts" => 60,
            "uas" => 75
        ],
    ];

    $newData = []; // Membuat array kosong untuk menyimpan data yang telah diubah

    foreach ($data as $item) {
        $uts = $item['uts'];
        $uas = $item['uas'];
        $rerata = ($uts * 0.4) + ($uas * 0.6);

        if ($rerata >= 80) {
            $huruf = 'A';
        } elseif ($rerata >= 70 && $rerata <= 79) {
            $huruf = 'B';
        } elseif ($rerata >= 60 && $rerata <= 69) {
            $huruf = 'C';
        } elseif ($rerata >= 50 && $rerata <= 59) {
            $huruf = 'D';
        } else {
            $huruf = 'E';
        }

        // Menambahkan data yang telah diubah ke array $newData
        $newData[] = [
            'nama' => $item['nama'],
            'NIM' => $item['NIM'],
            'uts' => $item['uts'],
            'uas' => $item['uas'],
            'rerata' => $rerata,
            'huruf' => $huruf
        ];
    }
    ?>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr bgcolor="#CCCDCC">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($newData as $item) : ?>
            <tr>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['NIM'] ?></td>
                <td><?= $item['uts'] ?></td>
                <td><?= $item['uas'] ?></td>
                <td><?= $item['rerata'] ?></td>
                <td><?= $item['huruf'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $data = [
        ["no" => 1, "nama" => "Ridho", "Matkul" => ["Pemrograman 1", "Praktikum Pemrograman 1", "pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"], "sks" => [2, 1, 2, 3]],
        ["no" => 2, "nama" => "Ratna", "Matkul" => ["Basis Data 1", "Praktikum Basis Data 1", "Kalkulus"], "sks" => [2, 1, 3]],
        ["no" => 3, "nama" => "Tono", "Matkul" => ["Rekayasa Perangkat Lunak", "Analisa dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"], "sks" => [3, 3, 3, 3]],
    ];

    foreach ($data as $key => $value) {
        $data[$key]['total'] = array_sum($value['sks']);
        if ($data[$key]['total'] < 7) {
            $data[$key]['ket'] = "Revisi KRS";
        } else {
            $data[$key]['ket'] = "Tidak Revisi";
        }
    }
    ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr bgcolor="#CCCDCC">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($data as $a) : ?>
            <?php for ($i = 0; $i < count($a['Matkul']); $i++) : ?>
                <tr>
                    <?php if ($i === 0) : ?>
                        <td rowspan="<?= count($a['Matkul']) ?>">
                            <?= $a['no'] ?>
                        </td>
                        <td rowspan="<?= count($a['Matkul']) ?>">
                            <?= $a['nama'] ?>
                        </td>
                    <?php endif; ?>
                    <td><?= $a['Matkul'][$i] ?></td>
                    <td><?= $a['sks'][$i] ?></td>
                    <?php if ($i === 0) : ?>
                        <td rowspan="<?= count($a['Matkul']) ?>">
                            <?= $a['total'] ?>
                        </td>
                        <td rowspan="<?= count($a['Matkul']) ?>" bgcolor="<?= $a['total'] < 7 ? 'red' : 'green' ?>">
                            <?= $a['ket'] ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endfor; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>

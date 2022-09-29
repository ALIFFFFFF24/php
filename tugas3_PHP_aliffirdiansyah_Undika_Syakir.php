<?php
//array scalar (1 dimensi)
$m1 = ['nim' => '123', 'nama' => 'alif', 'nilai' => 10];
$m2 = ['nim' => '456', 'nama' => 'chika', 'nilai' => 100];
$m3 = ['nim' => '789', 'nama' => 'christy', 'nilai' => 100];
$m4 = ['nim' => '321', 'nama' => 'marsha', 'nilai' => 100];
$m5 = ['nim' => '654', 'nama' => 'ashel', 'nilai' => 100];
$m6 = ['nim' => '987', 'nama' => 'shani', 'nilai' => 100];
$m7 = ['nim' => '231', 'nama' => 'gracia', 'nilai' => 100];
$m8 = ['nim' => '564', 'nama' => 'lulu', 'nilai' => 100];
$m9 = ['nim' => '897', 'nama' => 'kathrin', 'nilai' => 100];
$m10 = ['nim' => '213', 'nama' => 'jessi', 'nilai' => 100];

$ar_judul = [
    'No', 'NIM', 'Nama', 'Nilai', 'Keterangan',
    'Grade', 'Predikat'
];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_mahasiswa;

//keterangan
$keterangan = [
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Rata Rata' => $rata2
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS 3 PHP | Alif Firdiansyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
    <div class="container">
        <div class="row">
            <div class="col p-5">
                <table class="table text-center table-striped table-hover">
                    <thead>
                        <?php foreach ($ar_judul as $judul) { ?>
                            <th><?= $judul ?></th>
                        <?php } ?>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mahasiswa as $m) {

                            //keterangan lulus
                            $keterangan_lulus = ($m['nilai'] >= 60) ? 'lulus' : 'tidak lulus';

                            //grade
                            if ($m['nilai'] > 85 && $m['nilai'] <= 100) {
                                $grade = 'A';
                            } else if ($m['nilai'] > 65 && $m['nilai'] <= 85) {
                                $grade = 'B';
                            } else if ($m['nilai'] > 55 && $m['nilai'] <= 75) {
                                $grade = 'C';
                            } else if ($m['nilai'] > 44 && $m['nilai'] <= 65) {
                                $grade = 'D';
                            } else {
                                $grade = 'E';
                            }

                            //predikat
                            switch ($grade) {
                                case 'A':
                                    $predikat = 'Sangat Baik';
                                    break;
                                case 'B':
                                    $predikat = 'Baik';
                                    break;
                                case 'C':
                                    $predikat = 'Cukup';
                                    break;
                                case 'D':
                                    $predikat = 'Kurang';
                                    break;
                                case 'E':
                                    $predikat = 'Sangat Kurang';
                                    break;
                            }
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $m['nim'] ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td><?= $m['nilai'] ?></td>
                                <td><?= $keterangan_lulus ?></td>
                                <td><?= $grade ?></td>
                                <td><?= $predikat ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <?php
                            foreach ($keterangan as $ket => $hasil) {
                            ?>
                                <th><?= $ket ?> : <?= $hasil ?></th>
                            <?php } ?>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>

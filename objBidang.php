<?php
require_once "bidang.php";

$lingkaran = new Lingkaran(3);
$persegiPanjang = new PersegiPanjang(2, 9);
$segitiga = new Segitiga(3, 5);

$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 5 PHP</title>
</head>

<body>
    <div class="container p-5">
        <div class="row text-center">
            <div class="col">
                <h1>Menghitung Luas & Keliling Bidang</h1>
                <table class="table table-bordered">
                    <thead class="table-danger">
                        <tr>
                            <?php
                            foreach ($judul as $j) {
                            ?>
                                <th><?= $j ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?= $lingkaran->namaBidang() ?></td>
                            <td>Jari - jari = <?= $lingkaran->jari2 ?> Cm</td>
                            <td><?= $lingkaran->luasBidang() ?> Cm</td>
                            <td><?= $lingkaran->kelilingBidang() ?> Cm</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?= $persegiPanjang->namaBidang() ?></td>
                            <td>Panjang = <?= $persegiPanjang->panjang ?> Cm & Lebar = <?= $persegiPanjang->lebar ?> Cm</td>
                            <td><?= $persegiPanjang->luasBidang() ?> Cm</td>
                            <td><?= $persegiPanjang->kelilingBidang() ?> Cm</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?= $segitiga->namaBidang() ?></td>
                            <td>Alas = <?= $segitiga->alas ?> Cm & Tinggi = <?= $segitiga->tinggi ?> Cm</td>
                            <td><?= $segitiga->luasBidang() ?> Cm</td>
                            <td><?= $segitiga->kelilingBidang() ?> Cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

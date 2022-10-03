<?php
include 'pegawai.php';

//instance object pegawai
$p1 = new Pegawai('12345', 'Yessica Tamara', 'manager', 'muslim', 'menikah');
$p2 = new Pegawai('67890', 'Shani Indira Natio', 'asisten manager', 'kristen', 'belum menikah');
$p3 = new Pegawai('14234', 'Rangga Pranendra', 'staff', 'hindu', 'menikah');
$p4 = new Pegawai('76895', 'Bob Fahmi', 'kepala bagian', 'muslim', 'belum menikah');
$p5 = new Pegawai('08963', 'Muhammad Sumbul', 'staff', 'hindu', 'menikah');

//array
$pegawai = [$p1, $p2, $p3, $p4, $p5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <h1>Daftar Pegawai</h1>
        </div>
        <?php foreach ($pegawai as $p) { ?>
            <div class="row">
                <div class="col">
                    <?= $p->mencetak() ?>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>

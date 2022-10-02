<?php
require "pegawai.php";

//object
$alif = new pegawai('123', 'alif', 'manager', 'muslim', 'menikah');
//use pegawai 
$alif->setGajiPokok('manager');
$alif->setTunJab();
$alif->setTunKel('menikah');
$alif->setGajiKotor();
$alif->setZakatProfesi('muslim');
$alif->mencetak();

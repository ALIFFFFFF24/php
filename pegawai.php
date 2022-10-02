<?php
//class pegawai
class pegawai
{
    //variabel pegawai
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;


    //konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    //pegawai method
    public function setGajiPokok($jabatan)
    {
        switch ($jabatan) {
            case 'manager':
                $this->gapok   = 15000000;
                break;
            case 'asmen':
                $this->gapok   = 10000000;
                break;
            case 'kabag':
                $this->gapok  = 7000000;
                break;
            case 'staff':
                $this->gapok    = 4000000;
                break;
        }
    }

    public function setTunJab()
    {
        $this->tunjab = $this->gapok * 0.02;
    }

    public function setTunKel($status)
    {
        $this->tunjKel = ($status == 'menikah') ? $this->gapok * 0.01 : 0;
    }

    public function setGajiKotor()
    {
        $this->gajiKotor = $this->gapok + $this->tunjab + $this->tunjKel;
    }

    public function setZakatProfesi($agama)
    {
        if ($agama == 'muslim' && $this->gajiKotor >= 6000000) {
            $this->zakatProfesi = 0.025 * $this->gapok;
        }
    }
    public function mencetak()
    {
        echo '<br/>NIP: ' . $this->nip;
        echo '<br/>Nama: ' . $this->nama;
        echo '<br/>Jabatan: ' . $this->jabatan;
        echo '<br/>Agama: ' . $this->agama;
        echo '<br/>Status: ' . $this->status;
        echo '<br/>Gaji Pokok: ' . $this->gapok;
        echo '<br/>Tunjangan Jabatan: ' . $this->tunjab;
        echo '<br/>Tunjangan Keluarga: ' . $this->tunjKel;
        echo '<br/>Gaji Kotor: ' . $this->gajiKotor;
        echo '<br/>Zakat Profesi: ' . $this->zakatProfesi;
    }
}

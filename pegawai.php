<?php
class Pegawai
{
    //variable
    private $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    //constructor
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    //method set gaji pokok
    public function setGapok()
    {
        switch ($this->jabatan) {
            case 'manager':
                $gapok = 15000000;
                break;
            case 'asisten manager':
                $gapok = 10000000;
                break;
            case 'kepala bagian':
                $gapok = 7000000;
                break;
            case 'staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }

    //metohd set tunjangan jabatan
    public function setTunjab()
    {
        $tunjab = $this->setGapok() * 0.02;
        return $tunjab;
    }

    //method set tunjangan keluarga
    public function setTunkel()
    {
        $tunkel = ($this->status == 'menikah') ? $this->setGapok() * 0.01 : 0;
        return $tunkel;
    }

    //method set gaji kotor
    public function setGator()
    {
        $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $gator;
    }

    //method set zakat profesi
    public function setZakatProfesi()
    {
        $zaprof = ($this->agama == 'muslim' && $this->setGator() >= 6000000) ? $this->setGator() * 0.025 : 0;
        return $zaprof;
    }

    //method set gaji bersih
    public function setGajiBersih()
    {
        $gajiBersih = $this->setGator() - $this->setZakatProfesi();
        return $gajiBersih;
    }

    // function cetak
    public function mencetak()
    {
        echo '<hr>';
        echo '<br/>NIP: ' . $this->nip;
        echo '<br/>Nama Pegawai: ' . $this->nama;
        echo '<br/>Jabatan: ' . $this->jabatan;
        echo '<br/>Agama: ' . $this->agama;
        echo '<br/>Status: ' . $this->status;
        echo '<br/>Gaji Pokok: Rp.' . number_format($this->setGapok(), 2);
        echo '<br/>Tunjangan Jabatan: Rp.' . number_format($this->setTunjab(), 2);
        echo '<br/>Tunjangan Keluarga: Rp.' . number_format($this->setTunkel(), 2);
        echo '<br/>Zakat Profesi: Rp.' . number_format($this->setZakatProfesi(), 2);
        echo '<br/>Gaji Bersih: Rp.' . number_format($this->setGajiBersih(), 2);
        echo '<hr>';
    }
}

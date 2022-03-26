<?php
class Dispenser
{
    protected $namaMinuman;
    protected $volume;
    protected $hargaSegelas;
    private $saldo = 5000;
    private $jumlahGelas = 5;
    private $volumeGelas = 250;

    public function default(int $saldo, int $jmlGelas, int $volgelas)
    {
        $this->saldo = $saldo;
        $this->jumlahGelas = $jmlGelas;
        $this->volumeGelas = $volgelas;
    }

    public function cetakDispenser()
    {
        echo "Saldo yang dimiliki " . $this->saldo . ", jumlah gelas yang dimiliki " . $this->jumlahGelas . ", volume gelas yang dimiliki " . $this->jumlahGelas;
    }

    public function isi(int $vol)
    {
        $this->volume = $vol;
        if ($this->volume > 0 && $this->volume <= $this->volumeGelas && $this->jumlahGelas > 0) {
            $this->jumlahGelas--;
            $this->saldo = $this->saldo + $this->hargaSegelas;
            echo "Anda telah menuangkan air sebanyak " . $this->volume . "ml kedalam gelas berukuran " . $this->volumeGelas . "ml dengan harga " . $this->hargaSegelas;
        } elseif ($this->jumlahGelas <= 0) {
            echo "Tidak ada gelas tersedia, silahkan isi ulang gelas";
        } elseif ($this->volume <= 0) {
            echo "Anda tidak menuangkan air sama sekali";
        } elseif ($this->volume > $this->volumeGelas) {
            echo "Anda terlalu banyak menuangkan air";
        }
    }

    public function isiUlang(int $gelas)
    {
        $harga = 500;
        $totalHarga = 500 * $gelas;
        if ($this->saldo >= $totalHarga && $totalHarga >= $harga) {
            $this->saldo = $this->saldo - $totalHarga;
            $this->jumlahGelas = $this->jumlahGelas + $gelas;
            echo "Anda telah melakukan isi ulang gelas sebanyak " . $gelas . " gelas dengan total harga " . $totalHarga . " atau " . $harga . "/pcs";
        } elseif ($this->saldo < $totalHarga) {
            echo "Saldo anda tidak mencukupi";
        } elseif ($totalHarga < $harga) {
            echo "Masukkan angka gelas dengan benar";
        }
    }
}

class Gelas extends Dispenser
{
    public function __construct(string $nama, int $harga)
    {
        $this->namaMinuman = $nama;
        $this->hargaSegelas = $harga;
    }
    public function cetak()
    {
        echo "Ini adalah " . $this->namaMinuman . " seharga " . $this->hargaSegelas . " per gelasnya";
    }
}

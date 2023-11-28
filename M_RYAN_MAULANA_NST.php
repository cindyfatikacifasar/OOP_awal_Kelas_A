<?php
class Mahasiswa {
  // Properties
  private $nama;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct($nama, $nim, $matkul, $citacita) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }

  function get_nama() {
    return $this->nama;
  }

  function get_nim() {
    return $this->nim;
  }

  protected function get_matkul() {
    return $this->matkul;
  }

   protected function get_citacita() {
    return $this->citacita;
  }

  function __destruct() {
    echo "\nIni Akhir Dari Class Mahasiswa {$this->nama}";
  }

}

//Class Turunan Organisasi
class Organisasi extends Mahasiswa {
  protected $Organisasi;
  protected $TahunGabung;
  function HIMA() {
    echo "Nama: " . $this->get_nama();
    echo "\n";
    echo "Nim: " . $this->get_nim ();
    echo "\n";
    echo "Matkul: " . $this->get_matkul ();
    echo "\n";
    echo "Cita-cita: " . $this->get_citacita();
    echo "\n";
    echo "Organisasi: " . $this->get_organisasi();
    echo "\n";
    echo "Tahun Gabung: " . $this->get_tahun();

  }
function __construct($nama, $nim, $matkul, $citacita, $Organisasi, $TahunGabung) {
  parent::__construct($nama, $nim, $matkul, $citacita) ;
  $this->Organisasi = $Organisasi;
  $this->TahunGabung = $TahunGabung;
  }
protected function get_organisasi() {
  return $this->Organisasi;
  }
protected function get_tahun() {
  return $this->TahunGabung;
  }
function namatahun() {
  echo "\n";
  echo "Organisasi: " . $this->get_organisasi();
  echo "\n";
  echo "Tahun Gabung: " . $this->get_tahun();
  }

}

$Ryan = new Organisasi("M.RYAN_MAULANA_NST", "2255201022", "PBO", "Pengusaha", "HIMANIKKA", "belum masuk");
$Ryan->HIMA();

?>
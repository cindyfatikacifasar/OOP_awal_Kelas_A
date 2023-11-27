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
  function HIMA() {
    echo "Nama: " . $this->get_nama();
    echo "\n";
    echo "Nim: " . $this->get_nim ();
    echo "\n";
    echo "Matkul: " . $this->get_matkul ();
    echo "\n";
    echo "Cita-cita: " . $this->get_citacita();
    echo "\n";
    echo "Organisasi : HIMA"; 
}

}

$Ryan = new Organisasi("M.RYAN_MAULANA_NST", "2255201022", "PBO", "Pengusaha");
$Ryan->HIMA();

?>
<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;


  // Methods

  function __construct($name, $nim, $matkul, $cita_cita)
  {
      $this->name = $name;
      $this->nim = $nim;
      $this->matkul = $matkul;
      $this->cita_cita = $cita_cita;
  }
  
  function get_name() {
    return $this->name;
  }
  
  function get_nim() {
    return $this->nim;
  }
  
  protected function get_matkul() {
    return $this->matkul;
  }
  protected function get_cita_cita() {
    return $this->cita_cita;
  }
  function __destruct() {
    echo "\nini akhir dari class mahasiswa {$this->name}.";
  }
}


//class turunan organisasi
class organisasi extends mahasiswa {
  protected $NamaOrganisasi;
    protected $TahunGabung;
    function hima() {
        echo "Name: " . $this->get_name();
        echo "\n";
        echo "Nim: " . $this->get_nim ();
        echo "\n";
        echo "Matkul: " . $this->get_matkul ();
        echo "\n";
        echo "Cita-cita: " . $this->get_cita_cita();
        echo "\n";
        echo "Organisasi : Find a Problem";
        echo "\n";
        echo "Tahun Gabung: " . $this->get_tahun();
  }
  function __construct($name, $nim, $matkul, $citacita, $NamaOrganisasi, $TahunGabung)
    {
        parent::__construct($name, $nim, $matkul, $citacita);
        $this->NamaOrganisasi = $NamaOrganisasi;
        $this->TahunGabung = $TahunGabung;
    }
    protected function get_namaorganisasi()
    {
        return $this->NamaOrganisasi;
    }
    protected function get_tahun()
    {
        return $this->TahunGabung;
    }
    function namatahun()
    {
        echo "\n";
        echo "Nama Organisasi: " . $this->get_namaorganisasi();
        echo "\n";
        echo "Tahun Gabung: " . $this->get_tahun();
    }
}
$nisa = new organisasi('Khairunnisa', '2255201004', 'PBO', 'penyanyi', 'find a problem','2001 tahun gajah', );
$nisa->Hima();

?>

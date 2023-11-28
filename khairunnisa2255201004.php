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
  }
}
$nisa = new organisasi('Khairunnisa', '2255201004', 'PBO', 'penyanyi');
$nisa->Hima();

?>

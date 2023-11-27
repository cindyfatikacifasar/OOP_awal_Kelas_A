<!DOCTYPE html>
<html>
<body>



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
  
  function get_matkul() {
    return $this->matkul;
  }
  function get_cita_cita() {
    return $this->cita_cita;
  }
}


$nisa = new mahasiswa('nisa', '2255201004', 'PBO', 'penyanyi');

echo "Name: " . $nisa->get_name();
echo "\n";
echo "nim: " . $nisa->get_nim();
echo "\n";
echo "matkul: " . $nisa->get_matkul();
echo "\n";
echo "citacita: " . $nisa->get_cita_cita();
?>
 
</body>
</html>
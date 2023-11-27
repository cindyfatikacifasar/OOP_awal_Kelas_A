<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;

  // Methods
  function __construct ($name, $nim, $matkul, $cita_cita){
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

$zikri = new mahasiswa('zikri alhadi adha', '2255201008', 'pbo', 'Tentara');
echo $zikri->get_name();
echo "<br>";
echo $zikri->get_nim();
echo "<br>";
echo $zikri->get_matkul();
echo "<br>";
echo $zikri->get_cita_cita();

?>
 
</body>
</html>

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
  function set_name($name) {
    $this->name = $name;
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

$rehan = new mahasiswa('Ahmad Rayhan', '2255201053', 'pbo', 'Pembalap');
echo $rehan->get_name();
echo "<br>";
echo $rehan->get_nim();
echo "<br>";
echo $rehan->get_matkul();
echo "<br>";
echo $rehan->get_cita_cita();
?>

</body>

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

$alhashir = new mahasiswa('alhashir', '2255201024', 'pbo', 'menjadi boboiboy');
echo $alhashir->get_name();
echo "<br>";
echo $alhashir->get_nim();
echo "<br>";
echo "nim: " .  $alhashir->get_nim();
echo $alhashir->get_matkul();
echo "<br>";
echo "matkul: " . $alhashir->get_matkul();
echo $alhashir->get_cita_cita();

?>

</body>

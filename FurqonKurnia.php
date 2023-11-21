<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita;

  // Methods
  function set_name($name) {
    $this->name = $name;
  function __construct ($name, $nim, $matkul, $cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
  	$this->matkul = $matkul;
  }
  function get_matkul() {
  	return $this->matkul;
  }
  function set_cita($cita);
    $this->cita = $cita;
  {
  function get_cita() {
  	return $this->cita;
  }
  }
      
$Furqon = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'penjahat');
echo $Furqon->get_name();
echo "<br>";
echo $Furqon->get_nim();
echo "<br>";
echo "nim: " .  $Furqon->get_nim();
echo $Furqon->get_matkul();
echo "<br>";
echo "matkul: " . $Furqon->get_matkul();
echo $Furqon->get_cita();

?>

</body>

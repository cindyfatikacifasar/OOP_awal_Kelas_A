<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $okta;
  private $nim;
  private $matkul;
  private $cita_cita;

  // Methods
  function __construct ($okta, $nim, $matkul, $cita_cita){
  	$this->name = $okta;
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

$okta = new mahasiswa('Okta Bernaldi', '2255201051', 'pbo', 'Pilot');
echo $okta->get_name();
echo "<br>";
echo $okta->get_nim();
echo "<br>";
echo $okta->get_matkul();
echo "<br>";
echo $okta->get_cita_cita();

?>
 
</body>
</html>

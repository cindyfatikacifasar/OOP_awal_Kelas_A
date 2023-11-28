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
  protected function get_matkul() {
  	return $this->matkul;
  }
  protected function get_cita_cita() {
  	return $this->cita_cita;
  }
  function __destruct() {
    echo "<br>ini adalah akhir dari class mahasiswa {$this->name}";
  }
}
  class organisasi extends mahasiswa
{
  function hima() 
  {
echo "Nama: ". $okta->get_name();
echo "<br>";
echo "Nim: ". $okta->get_nim();
echo "<br>";
echo "Matkul: ". $okta->get_matkul();
echo "<br>";
echo "cita_cita: ". $okta->get_cita_cita();
echo "<br>";
echo "Organisasi: HIMA";
  }
}
  

$okta = new mahasiswa('Okta Bernaldi', '2255201051', 'PBO', 'Pilot');
$okta->Hima();
?>
 
</body>
</html>

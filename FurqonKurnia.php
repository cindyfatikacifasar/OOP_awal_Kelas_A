<!DOCTYPE html>
<html>
<body>
<?php

class mahasiswa { 
  // Properties
  public $name;
  public $nim;
  private $matkul;
  protected $cita;
  public $organisasi;

  // Methods
  function __construct ($name, $nim, $matkul, $cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    $this->organisasi = $organisasi;
  }
  function get_name() {
    return $this->name;
  }
  
  function get_nim() {
    return $this->nim;
  }
  
  private function get_matkul() {
  	return $this->matkul;
  }
  
  protected function get_cita() {
  	return $this->cita;
  }
  
    function get_matkul() {
      return $this->organisasi;
    }

function __destruct() {
  echo "Saya adalah mahasiswa dari organisasi {$this->organisasi}";
    
$Furqon = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Pendukung Ganjar Jadi Presiden');
    
echo $Furqon->get_name();
echo "<br>";
echo $Furqon->get_nim();
echo "<br>";
echo "nim: " .  $Furqon->get_nim();
echo $Furqon->get_matkul();
echo "<br>";
echo "matkul: " . $Furqon->get_matkul();
echo $Furqon->get_cita();
echo "<br>";
echo "Organisasi: " . $furqon->get_organisasi();
echo $furqon->get_organisasi;

?>

</body>

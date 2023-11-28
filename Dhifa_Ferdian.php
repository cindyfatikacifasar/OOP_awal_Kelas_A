<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $dhifa;
  private $nim;
  private $matkul;
  private $cita_cita;

  // Methods
  function __construct ($dhifa, $nim, $matkul, $cita_cita){
  	$this->name = $dhifa;
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
  echo "Nama: ". $dhifa->get_name();
  echo "<br>";
  echo "nim: ". $dhifa->get_nim();
  echo "<br>";
  echo "matkul:". $dhifa->get_matkul();
  echo "<br>";
  echo "cita_cita:". $dhifa->get_cita_cita();
  echo "<br>";
  echo "organisasi: HIMA";
  }
}
$dhifa = new mahasiswa('Muhammad Dhifa ferdian', '2255201050', 'PBO', 'Pejabat')
$dhifa->Hima();

?>
 
</body>
</html>

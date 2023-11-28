<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct ($name, $nim, $matkul, $citacita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
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
  protected function get_citacita() {
  	return $this->citacita;
  }
  function __destruct() 
  {
    echo "<br> Ini akhir class dari mahasiswa {$this->name}";
}
 }
class organisasi extends mahasiswa
  {
    function hima
    {
echo $Jefri->get_name();
echo "<br>";
echo $Jefri->get_nim();
echo "<br>";
echo $Jefri->get_matkul();
echo "<br>";
echo $Jefri->get_citacita();
echo "<br">;
echo "Organisasi: Hima";
}
  }

$Jefri = new mahasiswa('Jefrinaldi', '2255201021', 'pbo', 'Hebaatt');
$Jefri->hima();

?>
</body>

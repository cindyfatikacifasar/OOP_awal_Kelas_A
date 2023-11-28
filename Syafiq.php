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
  protected function get_matkul() {
  	return $this->matkul;
  }
  protected function get_cita_cita() {
  	return $this->cita_cita;
  }
  function __destruct() {
    echo "<br> ini class akhir mahasiswa {$this->name}";
  }
}
 class organisasi extends mahasiswa
   {
echo $syfq->get_name();
echo "<br>";
echo $syfq->get_nim();
echo "<br>";
echo $syfq->get_matkul();
echo "<br>";
echo $syfq->get_cita_cita();
echo "<br>";
echo "Organisasi: Hima";

$syfq = new mahasiswa('muhammad Syafiq firdaus Affan', '2255201025', 'pbo', 'mentri');
$syfq->hima();
?>
 
</body>
</html>

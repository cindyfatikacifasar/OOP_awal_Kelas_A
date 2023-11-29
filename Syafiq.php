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
class organisasi extends mahasiswa{
  protected $organisasi;
  protected $tahunGabung;
  function hima() {
    echo "Nama: " . $this->get_name();
    echo "<br>";
    echo "Nim: " . $this->get_nim();
    echo "<br>";
    echo "Matkul: " . $this->get_matkul();
    echo "<br>";
    echo "Cita-cita: " . $this->get_cita_cita();
    echo "<br>";
    echo "Organisasi: " . $this->get_organisasi();
    echo "<br>";
    echo "Tahun Gabung: " .$this->get_tahunGabung();
  }
  function __construct($name, $nim, $matkul, $cita_cita, $organisasi, $tahunGabung) {
    parent::__construct($name, $nim, $matkul, $cita_cita) ;
    $this->organisasi = $organisasi;
    $this->tahunGabung = $tahunGabung;
  }
  protected function get_organisasi() {
    return $this->organisasi;
  }
  protected function get_tahunGabung() {
    return $this->tahunGabung;
  }
  function namatahun() {
    echo "<br>";
    echo "Organisasi: " . $this->get_organisasi();
    echo "<br>";
    echo "Tahun Gabung: " . $this->get_tahunGabung();
  }
}
$syfq = new organisasi('muhammad Syafiq firdaus Affan', '2255201025', 'pbo', 'mentri', 'PDI Perjuangan', '2022');
$syfq->hima();
?>
 
</body>
</html>

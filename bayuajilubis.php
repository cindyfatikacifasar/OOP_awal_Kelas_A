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
  function __construct($name, $nim, $matkul,$cita_cita) {
    $this->nama = $nama;
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
}
class organisasi extends mahasiswa{
  protected $organisasi;
  protected $tahungabung;
  function hima(){
    echo "Nama: " . $this->get_name();
    echo "<br>";
    echo "nim: " .  $this->get_nim();
    echo "<br>";
    echo "matkul: " . $this->get_matkul();
    echo "<br>";
    echo "Cita-Cita: " . $this->get_cita_cita();
    echo "<br>";
    echo "Organisasi: " . $this->get_organisasi();
    echo "<br>";
    echo "Tahun Gabung: " . $this->get_tahungabung();
  }
  function __construct($name, $nim, $matkul, $cita_cita, $organisasi, $tahungabung) {
    parent::__construct($name, $nim, $matkul, $cita_cita) ;
    $this->organisasi = $organisasi;
    $this->tahungabung = $tahungabung;
  }
  protected function get_organisasi() {
    return $this->organisasi;
  }
  protected function get_tahungabung() {
    return $this->tahungabung;
  }
  function namatahun() {
    echo "<br>";
    echo "Organisasi: " . $this->get_organisasi();
    echo "<br>";
    echo "Tahun Gabung: " . $this->get_tahungabung();
  }
}

$bayu = new organisasi('bayu aji lubis', '2255201014', 'PBO', 'DPR RI', 'PDI Perjuangan', '2019');
$bayu->hima()
?>
 
</body>
</html>

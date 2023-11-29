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
      echo "<br> ini akhir class mahasiswa {$this->name}";
  }
 }
   class organisasi extends mahasiswa
     {
       protected $organisasi;
       protected $tahungabung;
       function hima()
     {
     echo "Nama: " . $this->get_name();
     echo "<br>";
     echo "NIM: " . $this->get_nim();
     echo "<br>";
     echo "Matkul: " . $this->get_matkul();
     echo "<br>";
     echo "Cita-Cita: " . $this->get_cita_cita();
     echo "<br>";
     echo "Organisasi: " . $this->get_organisasi();
     }
       function __construct($name, $nim, $matkul, $cita_cita, $organisasi, $tahungabung) {
       parent::__construct($name, $nim, $matkul, $cita_cita);
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

$rehan = new organisasi('Ahmad Rayhan', '2255201053', 'pbo', 'Pembalap', 'PKI PERJUANGAN', '2021');
$rehan->hima();
?>

</body>

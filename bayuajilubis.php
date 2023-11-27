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
  function get_matkul() {
  	return $this->matkul;
  }
  function get_cita_cita() {
  	return $this->cita_cita;
  }
}

$bayu = new mahasiswa('bayu aji lubis', '2255201014', 'PBO', 'Dokter');
echo $bayu->get_name();
echo "<br>";
echo $bayu->get_nim();
echo "<br>";
echo $bayu->get_matkul();
echo "<br>";
echo $bayu->get_cita_cita();
?>
 
</body>
</html>

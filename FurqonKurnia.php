<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa
{ 
    // Properties
    private $name;
    private $nim;
    private $matkul;
    private $cita;
    // Methods
    function __construct ($name, $nim, $matkul, $cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_nim() 
    {
        return $this->nim;
    }
    protected function get_matkul() 
    {
  	    return $this->matkul;
    }
    protected function get_cita() 
    {
  	    return $this->cita;
    }
    function __destruct() {
    echo "<br>Ini akhir dari class mahasiswa {$this->name}";
  }
}
//Class Turunan Organisasi
    class organisasi extends mahasiswa
    {
    protected $organisasi;
    protected $tahungabung;
    function hima()
    {
     echo "Nama: " . $this->get_name();
     echo "<br>";
     echo "nim: " .  $this->get_nim();
     echo "<br>";
     echo "matkul: " . $this->get_matkul();
     echo "<br>";
     echo "Cita-Cita: " . $this->get_cita();
     echo "<br>";
     echo "Organisasi: " . $this->get_organisasi();
     echo "<br>";
     echo "Tahun Gabung: " . $this->get_tahungabung();
    }
    function __construct($name, $nim, $matkul, $cita, $organisasi, $tahungabung) {
  parent::__construct($name, $nim, $matkul, $cita) ;
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
$Furrz = new organisasi('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Pemuda Pancasila', '2022');
$Furrz->hima();   

?>

</body>

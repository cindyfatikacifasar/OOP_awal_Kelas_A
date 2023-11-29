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
echo "Cita-Cita: " . $this->get_citacita();
echo "<br>";
echo "Organisasi: " . $this->get_organisasi();
     }
       function __construct($name, $nim, $matkul, $citacita, $organisasi, $tahungabung) {
       parent::__construct($name, $nim, $matkul, $citacita);
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

$Jefri = new organisasi('Jefrinaldi', '2255201021', 'pbo', 'Hebaatt', 'PKI Sampai Mati', '2022');
$Jefri->hima();

?>
</body>

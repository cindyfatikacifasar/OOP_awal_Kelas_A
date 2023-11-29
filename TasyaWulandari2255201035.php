<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct($name, $nim, $matkul, $citacita)
  {
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
  protected function get_citacita()
  {
      return $this->citacita;
  }
  function __destruct() {
    echo "<br> Ini akhir dari class mahasiswa  {$this->name}.";
  }
}

//class turunan organisasi
class organisasi extends mahasiswa {
  protected $namaorganisasi;
  protected $tahun;
  function hima(){
    echo "Name: " . $this->get_name();
    echo "<br>";
    echo "Nim: " . $this->get_nim();
    echo "<br>";
    echo "Matkul: " . $this->get_matkul();
    echo "<br>";
    echo "Cita-cita: " . $this->get_citacita();
    echo "<br>";
    echo "Organisasi: " . $this->get_namaorganisasi();
    echo "<br>";
    echo "Tahun Gabung: " . $this->get_tahun();
    }
  function __construct($name,$nim,$matkul,$citacita,$namaorganisasi,$tahun){
    parent:: __construct($name,$nim,$matkul,$citacita);
    $this->namaorganisasi = $namaorganisasi;
    $this->tahun = $tahun;
  }
  protected function get_namaorganisasi(){
    return $this->namaorganisasi;
  }
  protected function get_tahun(){
    return $this->tahun;
  }
}
$tasya = new organisasi('Tasya Wulandari', '2255201035', 'PBO', 'Dokter','Hima','2022');
$tasya->Hima();

?>
 

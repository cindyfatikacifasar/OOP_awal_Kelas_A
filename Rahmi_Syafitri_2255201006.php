<!DOCTYPE html>
<html>
<body>

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
  protected function get_citacita() {
    return $this->citacita;
  }
  function __destruct() {
    echo "<br> ini akhir dari class mahasiswa {$this->name}.";
  }
}

//Class turunan organisasi
class organisasi extends mahasiswa {
  protected $NamaOrganisasi;
  protected $tahun;
  function hima() {
      echo "Name: " . $this->get_name();
      echo "<br>";
      echo "Nim: " . $this->get_nim ();
      echo "<br>";
      echo "matkul: " . $this->get_matkul();
      echo "<br>";
      echo "Cita-Cita: " . $this->get_citacita();
      echo "<br>";
      echo "Organisasi : " . $this->get_NamaOrganisasi(); 
      echo "<br>";
      echo "Tahun bergabung : " . $this->get_tahun();
}
function __construct($name, $nim, $matkul, $citacita, $NamaOrganisasi, $tahun) 
  {
    parent::__construct($name, $nim, $matkul, $citacita);
        $this->NamaOrganisasi = $NamaOrganisasi;
        $this->tahun = $tahun;
  }

  protected function get_NamaOrganisasi() {
    return $this->NamaOrganisasi;
  }
  protected function get_tahun() {
    return $this->tahun;
  }
}

$rahmi = new organisasi('Rahmi Syafitri', '2255201006', 'PBO', 'Rich', 'Hima', '2022');
$rahmi->hima();

?>
 
</body>
</html>

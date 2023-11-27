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
  function hima() {
      echo "Name: " . $this->get_name();
      echo "<br>";
      echo "Nim: " . $this->get_nim ();
      echo "<br>";
      echo "matkul: " . $this->get_matkul();
      echo "<br>";
      echo "Cita-Cita: " . $this->get_citacita();
      echo "<br>";
      echo "Organisasi : HIMA"; 
}
}

$rahmi = new organisasi('Rahmi Syafitri', '2255201006', 'PBO', 'Rich');
$rahmi->hima();

?>
 
</body>
</html>

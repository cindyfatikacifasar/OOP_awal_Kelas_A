



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
 
  function get_matkul() {
    return $this->matkul;
  }
  function get_citacita()
  {
      return $this->citacita;
  }
}

$tasya = new mahasiswa('tasya', '2255201035', 'PBO', 'dokter');

echo "Name: " . $tasya->get_name();
echo "\n";
echo "nim: " . $tasya->get_nim();
echo "\n";
echo "matkul: " . $tasya->get_matkul();
echo "\n";
echo "citacita: " . $tasya->get_citacita();
?>
 

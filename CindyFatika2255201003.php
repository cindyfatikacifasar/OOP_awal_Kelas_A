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
  function_construct($name, $nim, $matkul, $citacita) {
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
  function get_citacita() {
    return $this->citacita;
  }
}

$cindy = new Mahasiswa(cindy','2255201003','PBO','Pilotkereta');


echo 'Nama : ' . $cindy->get_name();
echo "<br>";
echo 'nim: ' . $nim->get_name();
echo "<br>";
echo 'matkul: ' . $matkul->get_name();
echo "<br>";
echo 'citacita: ' . $cindy->get_citacita();
?>
 
</body>
</html>

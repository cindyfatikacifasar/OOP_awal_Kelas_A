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

  function get_matkul() {
    return $this->matkul;
  }
  function get_citacita() {
    return $this->citacita;
  }
}

$rahmi = new Mahasiswa('Rahmi Syafitri', '2255201006', 'PBO', 'Rich');


echo 'Nama : ' . $rahmi->get_name();
echo "<br>";
echo 'nim: ' . $rahmi->get_nim();
echo "<br>";
echo 'matkul: ' . $rahmi->get_matkul();
echo "<br>";
echo 'Cita-Cita: ' . $rahmi->get_citacita();
?>
 
</body>
</html>

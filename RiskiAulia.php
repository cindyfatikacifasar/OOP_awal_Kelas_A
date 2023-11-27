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
  function __construct($name, $nim ,$matkul ,$citacita) 
  {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }

  function get_name() 
  {
    return $this->name;
  }

  function get_nim() {
    return $this->nim;
  }

  function get_matkul () {
  	return $this->matkul;
  }
  function get_citacita () {
  	return $this->citacita;
  }

}

$riski = new mahasiswa('riski','2255201046','PBO','menjadi presiden');
echo "name: " . $riski->get_name();
echo "<br>";
echo "nim: " .  $riski->get_nim();
echo "<br>";
echo "matkul: " . $riski->get_matkul();
echo "<br>";
echo "cita cita: " . $riski->get_citacita();
?>
 
</body>
</html>

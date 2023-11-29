<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
    
  	$this->matkul = $matkul;
  }
  function get_matkul () {
  	return $this->matkul;
  }
}

$roman = new mahasiswa();
$roman->set_name('Abdurrahman');
$roman->set_nim('2255201009');
$roman->set_matkul('pbo');
echo "nama: " . $roman->get_name();
echo "<br>";
echo "nim: " .  $roman->get_nim();
echo "<br>";
echo "matkul: " . $roman->get_matkul();
?>
 
</body>
</html>
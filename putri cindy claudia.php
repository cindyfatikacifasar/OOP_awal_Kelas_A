<!DOCTYPE html>
<html>
<body>

<!DOCTYPE html>
<html>
<body>



<?php
class Mahasiswa {
  // Properties
  public $name;
  public $nim;
  public $matkul;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->name = $name;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
    $this->matkul = $matkul;
  }
  function get_matkul() {
    return $this->matkul;
  }
}

$cindyc = new Mahasiswa();
$nim = new Mahasiswa();
$matkul = new Mahasiswa();
$cindyc->set_name('Putri Cindy Claudia');
$nim->set_name('2255201028');
$matkul->set_name('pbo');

echo 'Nama : ' . $cindyc->get_name();
echo "<br>";
echo 'nim: ' . $nim->get_name();
echo "<br>";
echo 'matkul: ' . $matkul->get_name();
?>
 
</body>
</html>
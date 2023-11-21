<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $matkul;
    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_nim($nim)
    {
        $this->nim = $nim;
    }
    function get_nim()
    {
        return $this->nim;
    }
    function set_matkul($matkul)
    {
        $this->matkul = $matkul;
    }
    function get_matkul()
    {
        return $this->matkul;
    }
}

$Furrz = new mahasiswa();
$Furrz->set_name('Muhammad Ronaldo');
$Furrz->set_nim('2255201018');
$Furrz->set_matkul('pbo');
echo "Name: " . $Furrz->get_name();
echo "\n";
echo "nim: " . $Furrz->get_nim();
echo "\n";
echo "matkul: " . $Furrz->get_matkul();

<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita;

  // Methods
  function set_name($name) {
    $this->name = $name;
  function __construct ($name, $nim, $matkul, $cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
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
  function get_matkul() {
  	return $this->matkul;
  }
  function set_cita($cita);
    $this->cita = $cita;
  {
  function get_cita() {
  	return $this->cita;
  }
}

$Furqon = new mahasiswa();
$Furqon->set_name('Furqon Kurnia');
$Furqon->set_nim('2255201018');
$Furqon->set_matkul('pbo');
echo "Nama: " . $Furqon->get_name();
$Furqon = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'penjahat');
echo $Furqon->get_name();
echo "<br>";
echo $Furqon->get_nim();
echo "<br>";
echo "nim: " .  $Furqon->get_nim();
echo $Furqon->get_matkul();
echo "<br>";
echo "matkul: " . $Furqon->get_matkul();
echo $Furqon->get_cita();

?>

</body>

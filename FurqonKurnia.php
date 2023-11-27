<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa
{ 
    // Properties
    public $name;
    public $nim;
    private $matkul;
    protected $cita;
    public $organisasi;
    // Methods
    function __construct ($name, $nim, $matkul, $cita, $organisasi){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    $this->organisasi = $organisasi;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_nim() 
    {
        return $this->nim;
    }
    private function get_matkul() 
    {
  	    return $this->matkul;
    }
    protected function get_cita() 
    {
  	    return $this->cita;
    }
    function get_organisasi() 
    {
        return $this->organisasi;
    }

function __destruct() {
  echo "Saya adalah mahasiswa dari organisasi {$this->organisasi}";
    
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Pendukung Ganjar Jadi Presiden');
    
echo $Furrz->get_name();
echo "<br>";
echo $Furrz->get_nim();
echo "<br>";
echo "nim: " .  $Furrz->get_nim();
echo $Furrz->get_matkul();
echo "<br>";
echo "matkul: " . $Furrz->get_matkul();
echo $Furrz->get_cita();
echo "<br>";
echo "Organisasi: " . $Furrz->get_organisasi();
echo $Furrz->get_organisasi;

?>

</body>

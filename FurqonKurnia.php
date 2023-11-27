<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa
{ 
    // Properties
    private $name;
    private $nim;
    private $matkul;
    private $cita;
    // Methods
    function __construct ($name, $nim, $matkul, $cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_nim() 
    {
        return $this->nim;
    }
    function get_matkul() 
    {
  	    return $this->matkul;
    }
    function get_cita() 
    {
  	    return $this->cita;
    }
   
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel');
    
echo $Furrz->get_name();
echo "<br>";
echo $Furrz->get_nim();
echo "<br>";
echo "nim: " .  $Furrz->get_nim();
echo $Furrz->get_matkul();
echo "<br>";
echo "matkul: " . $Furrz->get_matkul();
echo $Furrz->get_cita();

?>

</body>

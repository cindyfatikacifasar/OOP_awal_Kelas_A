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
    protected function get_matkul() 
    {
  	    return $this->matkul;
    }
    protected function get_cita() 
    {
  	    return $this->cita;
    }
    function __destruct() {
    echo "<br>Ini akhir dari class mahasiswa {$this->name}";
  }
}
    class organisasi extends mahasiswa
    {
    protected $Organisasi;
    protected $TahunGabung;
    function hima()
    {
     echo "Nama: " . $Furrz->get_name();
     echo "<br>";
     echo "nim: " .  $Furrz->get_nim();
     echo "<br>";
     echo "matkul: " . $Furrz->get_matkul();
     echo "<br>";
     echo "Cita-Cita: " . $Furrz->get_cita();
     echo "<br>";
     echo "Organisasi: " . $this->get_organisasi();
     echo "<br>";
     echo "Tahun Gabung: " . $this->get_tahungabung;
    }
}       
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Pemuda Pancasila', '2022');
$Furrz->Hima();   

?>

</body>

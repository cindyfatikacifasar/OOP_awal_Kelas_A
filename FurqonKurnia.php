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
    function __construct ($name, $nim, $matkul, $cita, $organisasi, $tahungabung){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    $this->organisasi = $organisasi;
    $this->tahungabung = $tahungabung;
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
    protected function get_organisasi()
    {
        return $this->organisasi;
    }
    protected function get_tahungabung()
    {
        return $this->tahungabung
    }
    function namatahun() {
    echo "\n";
    echo "Organisasi: " . $this->get_organisasi();
    echo "\n";
    echo "Tahun Gabung: " . $this->get_tahun();
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
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel');
$Furrz->Hima();   

?>

</body>

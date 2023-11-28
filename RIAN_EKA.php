<?php
class mahasiswa
{
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
   protected function get_citacita()
    {
        return $this->citacita;
    }
    function __destruct() {
    echo "<br> ini akhir dari class mahasiswa {$this->name}.";
  }
}

//class turunan organisasi
class organisasi extends mahasiswa {
    function hima() {
        echo "name: " .$this->get_name();
        echo "<br>";
        echo "nim: " .$this->get_nim();
        echo "<br>";
        echo "matkul: " .$this->get_matkul();
        echo "<br>";
        echo "name: " .$this->get_citacita();
        echo "<br>";
        echo "organisasi:Hima";
    }
}
$rian = new organisasi('Rian Eka Putra', '2255201043', 'PBO', 'Proplayer');
$rian->hima();

?>
 

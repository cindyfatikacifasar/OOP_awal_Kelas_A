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
    
    function get_matkul()
    {
        return $this->matkul;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
}

$rian = new mahasiswa('rian eka putra', '2255201043', 'PBO', 'menjadi proplayer');

echo "Name: " . $rian->get_name();
echo "\n";
echo "nim: " . $rian->get_nim();
echo "\n";
echo "matkul: " . $rian->get_matkul();
echo "\n";
echo "citacita: " . $rian->get_citacita();
?>
 

<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mkul;
    private $citacita;
    // Methods
    function __construct($name, $nim, $mkul, $citacita)
    {
        $this->name = $name; 
        $this->nim = $nim; 
        $this->mkul = $mkul; 
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

    function get_mkul()
    {
        return $this->mkul;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
}

$yuda = new mahasiswa('yuda','2255201039','PBO','menjadi power ranger hijau');
echo "Name: " . $yuda->get_name();
echo "\n";
echo "nim: " . $yuda->get_nim();
echo "\n";
echo "mkul: " . $yuda->get_mkul();
echo "\n";
echo "citacita: " . $yuda->get_citacita();

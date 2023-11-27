<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mk;
    private $citacita;
    // Methods
    function __construct($name, $nim, $mk, $citacita)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->mk = $mk;
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

    function get_mk()
    {
        return $this->mk;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
}

$fauzan = new mahasiswa('fzn', '2255201023', 'PBO', 'menjadi power ranger putih');

echo "Name: " . $fauzan->get_name();
echo "\n";
echo "nim: " . $fauzan->get_nim();
echo "\n";
echo "mk: " . $fauzan->get_mk();
echo "\n";
echo "citacita: " . $fauzan->get_citacita();
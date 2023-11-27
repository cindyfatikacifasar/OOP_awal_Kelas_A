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

    protected function get_mk()
    {
        return $this->mk;
    }
    protected function get_citacita()
    {
        return $this->citacita;
    }
    function __destruct()
    {
        echo "\nini akhir dari class mahasiswa uhuy {$this->name}.";
    }
}

//class turunan organisasi
class organisasi extends mahasiswa
{
    function uhuy()
    {
        echo "Name: " . $this->get_name();
        echo "\n";
        echo "Nim: " . $this->get_nim();
        echo "\n";
        echo "Matkul: " . $this->get_mk();
        echo "\n";
        echo "Cita-cita: " . $this->get_citacita();
        echo "\n";
        echo "Organisasi : power ranger community";
    }

}

$fauzan = new organisasi('fzn', '2255201023', 'PBO', 'menjadi power ranger putih');
$fauzan->uhuy();

?>

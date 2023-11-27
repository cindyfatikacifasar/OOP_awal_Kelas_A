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
    function __destruct()
    {
        echo "\n ini akhir dari class mahasiswa {$this->name}.";
    }
}
class organisasi extends mahasiswa
{
    function hima()
    {
        echo "Name: " . $this->get_name();
        echo "\n";
        echo "Nim: " . $this->get_nim();
        echo "\n";
        echo "Matkul: " . $this->get_matkul();
        echo "\n";
        echo "Cita-cita: " . $this->get_citacita();
        echo "\n";
        echo "Organisasi : Hima";
    }

}
$surya = new organisasi('gama', '2255201045', 'PBO', 'menjadi ultramen');
$surya->Hima();

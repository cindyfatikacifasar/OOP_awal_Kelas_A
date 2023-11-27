<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mat_kul;
    private $cita_cita;


    // Methods
    function __construct($name, $nim, $mat_kul, $cita_cita)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->mat_kul = $mat_kul;
        $this->cita_cita = $cita_cita;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_nim()
    {
        return $this->nim;
    }

    function get_mat_kul()
    {
        return $this->mat_kul;
    }

    function get_cita_cita()
    {
        return $this->cita_cita;
    }
}

$yusuf = new mahasiswa('Yusuf', '2255201040', 'PBO', 'Pengusaha');
echo "Name: " . $yusuf->get_name();
echo "\n";
echo "nim: " . $yusuf->get_nim();
echo "\n";
echo "mat_kul: " . $yusuf->get_mat_kul();
echo "\n";
echo "cita cita: " . $yusuf->get_cita_cita();
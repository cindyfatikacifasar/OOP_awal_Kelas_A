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
        echo "\nini akhir dari class mahasiswa {$this->name}.";
    }
}
class organisasi extends mahasiswa
{
    protected $NamaOrganisasi;
    protected $TahunGabung;
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
        echo "Nama Organisasi: " . $this->get_namaorganisasi();
        echo "\n";
        echo "Tahun Gabung: " . $this->get_tahun();
    }
    function __construct($name, $nim, $matkul, $citacita, $NamaOrganisasi, $TahunGabung)
    {
        parent::__construct($name, $nim, $matkul, $citacita);
        $this->NamaOrganisasi = $NamaOrganisasi;
        $this->TahunGabung = $TahunGabung;
    }
    protected function get_namaorganisasi()
    {
        return $this->NamaOrganisasi;
    }
    protected function get_tahun()
    {
        return $this->TahunGabung;
    }
    function namatahun()
    {
        echo "\n";
        echo "Nama Organisasi: " . $this->get_namaorganisasi();
        echo "\n";
        echo "Tahun Gabung: " . $this->get_tahun();
    }

}
$surya = new organisasi('gama', '2255201045', 'PBO', 'menjadi ultramen', 'himaaaatika', '2000 Tahun Sebelum Masehi');
$surya->Hima();

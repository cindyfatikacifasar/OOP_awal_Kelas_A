<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mata_kuliah;
    private $citacita;

    // Methods
    function __construct($name, $nim, $mata_kuliah, $citacita)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->mata_kuliah = $mata_kuliah;
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
    
    protected function get_mata_kuliah()
    {
        return $this->mata_kuliah;
    }
    protected function get_citacita()
    {
        return $this->citacita;
    }
    function __destruct()
    {
        echo "\nini akhir dari class mahasiswa {$this->name}";
    }

}

// class turunan organisasi
class organisasi extends mahasiswa
{
    // properties
    protected $organisasi;
    protected $tahun;

    // methods
    function __construct($name, $nim, $mata_kuliah, $citacita, $organisasi, $tahun)
    {
        parent::__construct($name, $nim, $mata_kuliah, $citacita);
        $this->organisasi = $organisasi;
        $this->tahun = $tahun;
    }
    
    protected function get_organisasi()
    {
        return $this->organisasi;
    }
    protected function get_tahun()
    {
        return $this->tahun;
    }

    function hima()
    {
        echo "Name: " . $this->get_name();
        echo "\n";
        echo "Nim: " . $this->get_nim();
        echo "\n";
        echo "Mata kuliah: " . $this->get_mata_kuliah();
        echo "\n";
        echo "Cita cita: " . $this->get_citacita();
        echo "\n";
        echo "Nama organisasi: " . $this->get_organisasi();
        echo "\n";
        echo "Tahun gabung: " . $this->get_tahun();

    }
}
$catur = new organisasi('catur', '2255201015', 'PBO', 'menjadi power ranger hitam','hima','2069');
$catur->hima();
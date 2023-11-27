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
    public $organisasi;
    public $tahun;

    // methods
    function set_organisasi($organisasi)
    {
        $this->organisasi = $organisasi;
    }

    function set_tahun($tahun)
    {
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
        echo "name: " . $this->get_name();
        echo "\n";
        echo "nim: " . $this->get_nim();
        echo "\n";
        echo "mata kuliah: " . $this->get_mata_kuliah();
        echo "\n";
        echo "cita cita: " . $this->get_citacita();
        echo "\n";
        echo "organisasi: " . $this->get_organisasi();
        echo "\n";
        echo "tahungabung: " . $this->get_tahun();

        
    }
}
$catur = new organisasi('catur', '2255201015', 'PBO', 'menjadi power ranger hitam');
$catur->set_organisasi("hima");
$catur->set_tahun("2069");
$catur->hima();
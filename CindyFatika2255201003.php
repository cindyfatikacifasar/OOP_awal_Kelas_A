<!DOCTYPE html>
<html>
<body>



<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct($name, $nim, $matkul, $citacita) {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }
  
  function get_name() {
    return $this->name;
  }

  function get_nim() {
    return $this->nim;
  }

  protected function get_matkul() {
    return $this->matkul;
  }
  protected function get_citacita() {
    return $this->citacita;
  }


   function __destruct() {
    echo "<br> ini akhir dari class mahasiswa {$this->name}.";
  }
}

//class turunan organisasi
class organisasi extends mahasiswa {
  //properties
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
  
      function bem() {
          echo "Name: " . $this->get_name();
          echo "<br>";
          echo "Nim: " . $this->get_nim ();
          echo "<br>";
          echo "matkul: " . $this->get_matkul();
          echo "<br>";
          echo "Cita-Cita: " . $this->get_citacita();
          echo "<br>";
          echo "Nama organisasi: " . $this->get_organisasi();
          echo "<br>";
          echo "Tahun gabung: " . $this->get_tahun();
    }
 
}

$cindy = new organisasi('CindyFatika','2255201003','PBO','Pilotkereta','BEM','2023');
$cindy->bem();


?>
 
</body>
</html>

<?php 
class Mahasiswa {
    private $nim; //access modifier private, public, protected
    private $nama;
    private $semester;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setSemester($semester) {
        $this->semester = $semester;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getSemester() {
        return $this->semester;
    }
}

$budi = new Mahasiswa();
$budi->setNama('Budi Santoso');
$budi->setNim('0110221234');
$budi->setSemester(4);

$siti = new Mahasiswa();
$siti->setNama('Siti Nurjanah');
$siti->setNim('0110221235');
$siti->setSemester(4);

echo $budi->getNama();  //Budi Santoso
echo '<br/>';
echo $budi->getNim();   //0110221234
echo '<br/>';
echo $budi->getSemester();   //4

echo '<br/>';
echo $siti->getNama();  //Siti Nurjanah
echo '<br/>';
echo $siti->getNim();   //0110221235
echo '<br/>';
echo $siti->getSemester();   //4
?>
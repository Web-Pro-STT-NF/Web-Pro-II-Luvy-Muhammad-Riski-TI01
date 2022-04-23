<?php

// Cara Membuat class 
class Mahasiswa
{
    // Cara Membuat property (variabel)
    public $nama; //(public agar bisa diakses diluar)
    public $alamat;
    public $jurusan;

    //Cara Membuat method(fungsi)
    function CekNama()
    {
        // Cara mencetak method
        echo "Nama saya :" . $this->nama;
    }
    function __construct($dnama, $dalamat, $djurusan)
    {
        $this->nama = $dnama;
        $this->alamat = $dalamat;
        $this->jurusan = $djurusan;
    }
}

// Cara Membuat Object
$mahasiswa1 = new Mahasiswa("Luvy Muhammad Riski", "Depok, Cilodong", "Teknik Informatika");

// Cara akses property
echo $mahasiswa1->nama;
echo "<br>";
echo $mahasiswa1->alamat;
echo "<br>";
echo $mahasiswa1->jurusan;

echo "<br>";

// cara akses method
// $mahasiswa1->ceknama();

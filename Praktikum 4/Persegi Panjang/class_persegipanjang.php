<?php
class PersegiPanjang
{ // buka class
    private $Panjang;
    private $Lebar;

    function __construct( $P, $L)
    {
        $this->Panjang = $P;
        $this->Lebar = $L;
    }
    function getLuas ()
    {
        return $this->Panjang * $this->Lebar;
    }
    function getKeliling ()
    {
        return (2* $this->Panjang )+ $this->Lebar;
    }
} // tutup class
?>
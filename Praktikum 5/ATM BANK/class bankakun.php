<?php
require_once 'class.php';

class BankAccount extends Account{
    public $customer;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer=$customer;
    }

    // override method
    function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }

    public function transfer($ab_tujuan,$uang){
        $this->witdraw($uang);// rekening ini berkurang
        $ab_tujuan->deposit($uang);// rekening tujuan bertambah
        $this->biayatransfer();
    }
    private function biayatransfer(){
        $this->witdraw(8000);
    }
}
?>
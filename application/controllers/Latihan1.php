<?php 
class Latihan1 extends CI_Controller 
{ 
    public function index() 
    { 
        echo "<b><h2>Selamat datang.. selamat belajar web programming</h2><cb>"; 
     
    } 
    public function penjumlahan($n1,$n2) 
    { 
        /*$this->load->model('Model_Latihan1'); 
        $hasil = $this->Model_Latihan1->jumlah($n1, $n2); 
        echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = " .$hasil;
        */
        
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari". $n1 ." + ". $n2 ." = ".$hasil;
    }
}

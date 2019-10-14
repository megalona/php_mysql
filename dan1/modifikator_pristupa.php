<?php

class Datum{

    
    private $dan = 'Utorak'; //pristup moguc samo unutar klase 
    protected $mjesec = 'Listopad'; //pristup moguc unutar klase i u nasljeđenim klasama
    public $godina = 2019; //pristup moguc izvan klase

    public function print(){

        echo $this->dan;
        echo $this->mjesec;
        echo $this->godina;
    }
}

$datum = new Datum();


// var_dump($datum);

$datum->print();

echo $datum->godina;
echo $datum->dan;
echo $datum->mjesec;


?>
<?php

include 'Datum.php';

class Mjesec extends Datum{

    private $mjeseci = array ('Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj');

    public function getMonthName($date){
    
        $mjesec = date('n', strtotime($date));
        $mjesec--;
        $ime_mjeseca = $this->mjeseci[$mjesec];
        return "danas je dan ". $this->getDayName($date) ."u mjesecu". $ime_mjeseca;

    }

}

$mjesec = new Mjesec ();
echo $mjesec->getMonthName('2019-2-15');

?>
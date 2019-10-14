<?php

class Datum{

    public $dan = 'Ponedjeljak';
}

//instanciranje objekta
$datum = new Datum();
echo $datum->dan;
echo '<br>';

$datum->dan = 'Utorak';
echo $datum->dan;
echo '<br>';

$datum2 = new Datum ();
echo $datum2->dan;


?>
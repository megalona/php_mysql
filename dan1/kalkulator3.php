<form action="" method="POST" enctype="multipart/form-data">
    <h4>Kalkic</h4>
    <label for="brojUnosa">Unesite brojeve u polja</label>
    <br>
    <input type="number" name="prvibroj" id="prvibroj">

    <select name="operator" id="operator">
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="podijeljeno">/</option>
    <option value="puta">*</option>
    <option value="modul">%</option>
    </select>

    <input type="number" name="drugibroj" id="drugibroj">
    <input type="submit" name="jednako" value="=">

<?php


if (isset($_REQUEST['jednako'])) {
   
    $vrijednost1 = $_REQUEST['prvibroj'];
    $vrijednost2 = $_REQUEST['drugibroj'];
    $izlazno= 0;}

  foreach ($_REQUEST as $operator => $value) {
        if ($value == 'plus') {
            $izlazno = $vrijednost1+$vrijednost2;
            echo "<input type=number name=$izlazno value=$izlazno>";
        }
        if ($value == 'minus') {
            $izlazno = $vrijednost1-$vrijednost2;
            echo "<input type=number name=$izlazno value=$izlazno>";
          }
        if ($value == 'podijeljeno') {
           $izlazno = $vrijednost1/$vrijednost2;
           echo "<input type=number name=$izlazno value=$izlazno>";
          }
        if ($value == 'puta') {
           echo $izlazno = $vrijednost1*$vrijednost2;
          }
        if ($value == 'modul') {
            $izlazno = $vrijednost1%$vrijednost2;
            echo "<input type=number name=$izlazno value=$izlazno>";
          }
  }
    


?>
</form>


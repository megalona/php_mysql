<form action="" method="POST" enctype="multipart/form-data">
    <h4>Upload</h4>
    <label for="brojUnosa">Unesite koliko datoteka zelite ucitati</label>
    <br>
    <select name="brojUnosa" id="brojUnosa">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option></select>
    <br>
    <br>
    <input type="submit" name="potvrdi" value="Potvrdi">

<?php

if (isset($_REQUEST['potvrdi'])) {
   
    $brojUnosa = $_REQUEST['brojUnosa'];  //, proučit

    for ($i=1; $i <= $brojUnosa ; $i++) { 
        echo "<input type=file name=datoteka$i><br><br>";
    }
    echo '<input type="submit" name="upload" value="učitaj">';
}

foreach ($_FILES as $key => $value) {


    $filename = $value['name'];
    $tmpname = $value['tmp_name'];
    $error = $value['error'];
    $size = $value['size'];

    if ($error == UPLOAD_ERR_OK && $size != 0) {
        
        $path = pathinfo($filename);
        //print_r($path);
        $ext = $path['extension'];
        $new_name = time().rand(10000, 10000000) .'.'. $ext;
        $destfile = $upload_path.$new_name;
        if(move_uploaded_file($tmpname, $destfile)){
            echo 'Upload je uspješan! <br>';
            echo "<a href=$destfile>Prikaži originalnu sliku</a>";
            echo "<p><img src=$destfile width=200></p>";
        }else{
            echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
        }
    }else{
        echo 'Došlo je do pogreške prilikom Upload-a!';
    }
}

?>
</form>


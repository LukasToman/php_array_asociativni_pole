<?php require_once('vendor/autoload.php');




    $jmena = ["David","Anna","Markus"];
    echo $jmena [0];
    echo "<br>";
    echo $jmena [1];
    echo "<br>";
    echo $jmena [2];
    echo "<br>";

    //asociativni pole
    $simpsonovi = ["Bart" => "Rostak", "Marge" =>"Modre vlasy","Homer" => "Kobliha"];

    echo $simpsonovi["Bart"];
    echo "<br>";
    echo $simpsonovi ["Marge"];
    echo "<br>";
    echo $simpsonovi["Homer"];

    print_r($jmena);

    print_r($simpsonovi);

?>

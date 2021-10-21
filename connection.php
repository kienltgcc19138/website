
<?php
    $connection = pg_connect("postgres://scoonfjhijybkk:6f1473299c738c95bcad4dd493f14091db9bcec0443b99879767b9b2ed08e2dd@ec2-52-0-93-3.compute-1.amazonaws.com:5432/d1t3beo5hrtvsc");
    //$connection = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=322001");
    if(!$connection){
        die("Can not connect database".pg_connect_error());
    } 
?>
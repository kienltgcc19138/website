
<?php
    $connection = pg_connect("postgres://zxncynmjahuphs:18d12fd2c6fb1baa0ab3cbcbae4c532be55e9550256254afa1bfaf13103b50e9@ec2-34-233-64-238.compute-1.amazonaws.com:5432/d97l7f93co7ukk");
    //$connection = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=322001");
    if(!$connection){
        die("Can not connect database".pg_connect_error());
    } 
?>
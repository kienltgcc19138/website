
<?php
    $conn = pg_connect("postgres://aiaxqbwhsmzzri:6c5ebfadeb81133ef3a0c425c8835e11b1259a96dd2409459ff3b4ac64d5db44@ec2-54-166-37-125.compute-1.amazonaws.com:5432/d1mterg5b72ksl");
    
    if(!$conn){
        die("Can not connect database".pg_connect_error());
    } 
?>
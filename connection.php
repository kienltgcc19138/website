
<?php
    $conn = pg_connect("postgres://rxetzggwksapao:e3b56f892acc604496dba6d951cbb5581065c36c3c8a7e36d106fefe8467c3cd@ec2-54-145-224-156.compute-1.amazonaws.com:5432/dd3jqrmclf83qb");
    
    if(!$conn){
        die("Can not connect database".pg_connect_error());
    } 
?>
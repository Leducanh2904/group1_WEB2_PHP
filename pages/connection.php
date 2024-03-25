<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_name = "web2";
    $db_password = "";
    $conn = "";
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "you are not connected";
    }
    if($conn){
        echo"you are connected"; 
    }
    else{
        echo "you are not connected";
    }
?> 
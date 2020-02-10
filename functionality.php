<?php
include 'ConnectDB.php';

    //Parse Length of latest word in db of column LENGTH
    $amountLDB = "SELECT `LENGTH` FROM `session` ORDER BY ID DESC LIMIT 1" ;
    $result = mysqli_query($conn, $amountLDB);
    $amount_Letters = mysqli_fetch_assoc($result);
    
    //--------------------




    //-------------------
    

?>
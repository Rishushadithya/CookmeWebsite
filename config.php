<?php

$con = new mysqli("localhost","root","","cookme");

 if($con->connect_error){

 }
 else{
    echo "you can fill sucessful";
 }
?>
<?php
$server="localhost";
$username="root";
$password="";
$database="domain";


$connect=new mysqli($server,$username,$password,$database);

if($connect){
    echo"connection successful";
}
else{
    echo"something went wrong";
}

mysqli_query($connect,"insert into `BCA`(class,name) values ('2nd ba','tarun')");
?>
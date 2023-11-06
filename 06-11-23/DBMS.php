<?php
$SERVER="localhost";
$username="root";
$password="";
$Database="tharun1";

$connect = mysqli_connect($SERVER,$username,$password,$Database);
if($connect){
    echo "success";

}
else{
    echo "unsuccess";
}
mysqli_query($connect,"insert into `tharun2`(class,subject) values ('2nb','rty')");
?>
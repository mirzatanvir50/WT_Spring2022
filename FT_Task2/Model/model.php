<?php
class DB
{
    
    function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass="";
$DBName="fttask1";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }

    function InsertData($firstname,$lastname,$age,$email,$password,$designation,$tablename, $conn){
$sqlstr="INSERT INTO $tablename (firstname,lastname,age,email,password,designation) values ('$firstname','$lastname',$age,'$email','$password','$designation')";

if($conn->query($sqlstr)==TRUE)
{
echo "Data Inserted Successfully";
}
else{
    echo "cant insert".$conn->err;
}
    }

function closecon($conn){
    $conn->close();
}

}
?>
<?php

$firstname=$lastname=$age=$email=$password="";


$firstname= $_REQUEST['FirstName']; 

if(empty($firstname) || strlen($firstname)<6)
    {
        echo "Invalid Name, Please enter again";
    }
else
    {
        echo "First name = ".$firstname;
    }
echo"<br>";

$lastnamename= $_REQUEST['LastName'];
if(empty($lastname) || strlen($lastname)<6)
    {
    echo "Invalid Name, Please enter again";
    }
else
    {
    echo "Last name = ".$lastname;
    }
echo"<br>";

$age= $_REQUEST['age'];

if(empty($age))
    {
    echo "Please select your age";
    }
else
    {
    echo "Age =".$age;
    }

echo"<br>";


if(isset($_POST["desigation"]))
    {
    echo "Designation =".$_POST["desigation"] ;
    }
else
    {
    echo "Select designation ";
    }

echo"<br>";

if (isset($_POST["JAVA"]) || isset($_POST["PHP"]) ||  isset($_POST["C++"]))
    {
    echo "Selected Programming Language";
    if(isset($_POST["JAVA"]))
    {
        echo "Programming Language =".$_POST["JAVA"];
    }
    if(isset($_POST["PHP"]))
    {
        echo "Programming Language =".$_POST["PHP"];
    }
    if(isset($_POST["C++"]))
    {
        echo "Programming Language =".$_POST["C++"];
    }
    }
else
    {
    echo "Select Programming language";
    }
    echo"<br>";
if (isset($_POST["email"]) || isset($_POST["password"]))
{
$email= $_REQUEST['email'];
$password= $_REQUEST['password']; 
}
    
if(empty($email))
    {
        echo "Invalid email";
    }
    else
    {
        echo "Email Address = ".$email;
    }
    echo"<br>";   


if(empty($password) || strlen($password)<6)
    {
        echo "Invalid password";
    }
    else
    {
        echo "Password is valid";
    };

// echo"<br>";


if(file_exists('file.json')){
     $final_data=fileWriteAppend();
     file_put_contents('file.json', $final_data);
    
}else{
     $final_data=fileCreateWrite();
     file_put_contents('file.json', $final_data);
    
};


function fileWriteAppend(){
		$current_data = file_get_contents('file.json');
		$array_data = json_decode($current_data, true);
		$extra = array(
            'first name'=>$firstname,
            'last name'=>$lastname,
            'email'=>$email,
            'password'=>$password,
           );
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		return $final_data;
};

function fileCreateWrite(){
		$file=fopen("file.json","w");
		$array_data=array();
        $extra = array(
            'first name'=>$firstname,
            'last name'=>$lastname,
            'email'=>$email,
            'password'=>$password,
           );
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		fclose($file);
		return $final_data;
};


?>
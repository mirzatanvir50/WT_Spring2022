<?php
include ("../model/model.php");

$firstname=$lastname=$age=$designation=$email=$password="";
$fname=$lname=$ag=$dg=$lang=$em=$pg=$fu="";

if(isset($_POST["submit"]))
{
    $firstname= $_POST['firstname']; 

    if(empty($firstname) || strlen($firstname)<6)
    {
        $fname= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $fname= "First name = ".$firstname;
    }
    

    $lastname= $_POST['lastname'];
    if(empty($lastname) || strlen($lastname)<6)
    {
        $lname= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $lname= "Last name = ".$lastname;
    }
   

    $age= $_POST['age'];
    if(empty($age))
    {
        $ag= "Please select your age";
    }
    else
    {
        $ag= "Age =".$age;
    }

    
    if(isset($_POST['designation']))
    {
        $dg= "Designation =". $_POST['designation']; 
    }
    else{
        $dg= "Please select designation ";
    }
    
    if(isset($_POST["JAVA"]) && isset($_POST["PHP"]) && isset($_POST["C++"]))
        {
            $lang= "  ".$_POST["JAVA"]."  ".$_POST["PHP"]."  ".$_POST["C++"];
            
        } 
        else if(isset($_POST["PHP"]) && isset($_POST["C++"]))
        {
            $lang= "  ".$_POST["PHP"]."  ".$_POST["C++"];
            
        }
        else if(isset($_POST["JAVA"]) && isset($_POST["C++"]))
        {
            
            $lang= "  ".$_POST["JAVA"]."  ".$_POST["C++"];
        }
        else if(isset($_POST["JAVA"]) && isset($_POST["PHP"]))
        {
            $lang= "  ".$_POST["JAVA"]."  ".$_POST["PHP"];
            
        }
        else if(isset($_POST["C++"]))
        {
            $lang= "  ".$_POST["C++"];
            
        }
        else if(isset($_POST["PHP"]))
        {
            $lang= "  ".$_POST["PHP"];
            
        }
        else if(isset($_POST["JAVA"]))
        {
            $lang= "  ".$_POST["JAVA"];
             
        }
    else
    {
        $lang= "Please select Programming language";
    }

    $email= $_POST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $em= "Please enter a valid email";
        }
        else
        {
            $em= "Email Address = ".$email;
        }

    $password= $_POST['password']; 
        if(empty($password) || strlen($password)<6)
        {
            $pg=  "Please enter a valid password";
        }
        else
        {
            $pg= "Password is valid";
        }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
    {
        $fu= "File Uploaded";
    }
    else
    {
        $fu= "File Cannot Upload";
    }

  if((empty($firstname)) || (empty($lastname)) || (empty($age)) || (empty($email)) || (empty($password)))
  {
      echo "All fields required";
  }
  else{
    $mydb=new DB();
    $connobj=$mydb->opencon();
    $mydb->InsertData($firstname,$lastname,$age,$email,$password,$_POST['designation'], "regdatafile", $connobj);
    $mydb->closecon($connobj);
  }

}  





?>
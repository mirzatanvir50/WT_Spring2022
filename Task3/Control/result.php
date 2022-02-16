<?php
$x;

if(isset($_POST["submit"]))
{
    $firstname= $_REQUEST['firstname']; 

    if(empty($firstname) || strlen($firstname)<6)
    {
        $fname= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $fname= "First name = ".$firstname;
    }
    

    $lastname= $_REQUEST['lastname'];
    if(empty($lastname) || strlen($lastname)<6)
    {
        $lname= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $lname= "Last name = ".$lastname;
    }
   

    $age= $_REQUEST['age'];
    if(empty($age))
    {
        $ag= "Please select your age";
    }
    else
    {
        $ag= "Age =".$age;
    }
    
    if(isset($_POST["desigation"]))
    {
        $dg= "Designation =".$_POST["desigation"] ;
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

    $email= $_REQUEST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $em= "Please enter a valid email";
        }
        else
        {
            $em= "Email Address = ".$email;
        }

    $password= $_REQUEST['password']; 
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
}



$formdata = array(
    'firstName'=> $_POST["firstname"],
    'lastName'=> $_POST["lastname"],
    'age'=> $_POST["age"],
    'email'=>$_POST["email"],
    'designation'=>$_POST["desigation"],
    'programming language'=> $lang
 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;

 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



 if(file_put_contents('data.json', $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
 {
      echo "no data saved";
 }


?>
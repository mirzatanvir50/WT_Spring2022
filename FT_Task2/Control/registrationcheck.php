<?php
   include ("../model/model.php");

   $firstname= $lastname=$age=$email=$password=$confirmpassword=$programming_language=$designation=$filename=$a=$b=$c=$d=$f=$g=$h="";
   
   if(isset($_POST["submit"]))
   {
   $firstname= $_REQUEST['firstname']; 
   
   if(empty($firstname) || strlen($firstname)<2)
   {
       $a= "Please enter a valid name with more than 2 characters";
   }
   else
   {
       $a= "First name = ".$firstname;
   }
   
   
   $lastname= $_REQUEST['lastname'];
   if(empty($lastname) || strlen($lastname)<2)
   {
       $b= "Please enter a valid name with more than 2 characters";
   }
   else
   {
       $b= "Last name = ".$lastname;
   }
   
   
   $age= $_REQUEST['age'];
   if(empty($age))
   {
       $c= "Please select your age";
   }
   else
   {
       $c= "Age =".$age;
   }
   
   $designation=$_POST["designation"];
   if(isset($_POST["designation"]))
   {
       $d= "Designation =".$designation ;
   }
   else{
       $d= "Please select designation ";
   }
   
   if(isset($_POST["JAVA"]) && isset($_POST["PHP"]) && isset($_POST["C++"]))
       {
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["PHP"]."  ".$_POST["C++"];
           
       } 
       else if(isset($_POST["PHP"]) && isset($_POST["C++"]))
       {
        $programming_language= "  ".$_POST["PHP"]."  ".$_POST["C++"];
           
       }
       else if(isset($_POST["JAVA"]) && isset($_POST["C++"]))
       {
           
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["C++"];
       }
       else if(isset($_POST["JAVA"]) && isset($_POST["PHP"]))
       {
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["PHP"];
           
       }
       else if(isset($_POST["C++"]))
       {
        $programming_language= "  ".$_POST["C++"];
           
       }
       else if(isset($_POST["PHP"]))
       {
        $programming_language= "  ".$_POST["PHP"];
           
       }
       else if(isset($_POST["JAVA"]))
       {
        $programming_language= "  ".$_POST["JAVA"];
            
       }
   else
   {
    $programming_language= "No Language Selected";
   }
   
   $email= $_REQUEST['email'];
   
       if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
       {
           $f= "Please enter a valid email";
       }
       else
       {
           $f= "Email Address = ".$email;
       }
       
   //password and confirm password need to be matched
   $password= $_REQUEST['password']; 
   $confirmpassword=$_REQUEST['confirmpassword'];
   
   if(empty($password) || strlen($password)<5)
   {
       $g=  "Please enter a valid password";
   }
   else if($password != $confirmpassword)
   {
       $g= "Password didn't match";
   }
   else
   {
       $g= "Password is valid";
   }
      
   
    if(empty($password) || strlen($password)<6)
    {
        $h=  "Please enter a valid password";
    }
    else
    {
        $h= "Password is valid";
    }

    $filename=$_FILES["myfile"]["name"];
    //if filesize is more than 2mb it will not upload
    if (($file_size = $_FILES['myfile']['size'] > 2097152)){
           $h= 'File too large. File must be less than 2 megabytes.'; 
    }
   
    else{
       if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
       {
           $h= "File Uploaded";
       }
       else
       {
           $h= "File Cannot Upload";
       }
   }

   //if anydata is not correct it will not store in database
   if(empty($firstname) || strlen($firstname)<2 || empty($lastname) || strlen($lastname)<2 || empty($age) || empty($_POST["designation"]) || 
   (empty($_POST["JAVA"])  && empty($_POST["PHP"]) && empty($_POST["C++"]))  || empty($email) || 
   !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || 
   empty($password) || strlen($password)<5 || $password != $confirmpassword)
   {
   echo "No data Saved";
   }
   
   //inserting data to our database, db name=labtask, table name=registration, table column numbers=8;
   else{
    $mydb=new DB();
    $connobj=$mydb->opencon();
    $mydb->InsertData($firstname, $lastname, $age, $designation, $programming_language, $email, $password, $filename, "registration",$connobj);
    $mydb->closecon($connobj);

    /*
   //storing data using JSON
  $formdata = array(
   'firstName'=> $_POST["firstname"],
   'lastName'=> $_POST["lastname"],
   'age'=> $_POST["age"],
   'designation'=>$designation,
   'programming language'=>$programming_language,
   'email'=>$_POST["email"],
   'password'=>$_POST["password"],
   'filename'=>$_FILES["myfile"]["name"]
   );
   $existingdata = file_get_contents('data.json');
   $tempJSONdata = json_decode($existingdata);
   $tempJSONdata[] =$formdata;
   
   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
   
   
   if(file_put_contents("data.json", $jsondata)) {
     echo "Data successfully Saved <br>";
   }
   else 
   {
     echo "No data saved";
   }*/
   }
   
   }
   
   
   ?>

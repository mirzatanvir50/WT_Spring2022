<?php
include "../Control/result.php"
?>

<html>
<head>
<title>Registration</title>

<link rel="stylesheet" type="text/css" href="../CSS/reg.css">

<script src="../JS/reg.js" defer></script>
</head>

<body>


<main>
<h1> Registration Form </h1>

<div class='form-fields'>
        <div class='form-field'>
            <label> First Name : </label>
            <input type="text" name="firstname" id='fname' >
            <p> <?php echo $fname ?> </p>
        </div>

        <div class='form-field'>
            <label> Last Name : </label>
            <input type="text" name="lastname" id='lname'  >
            <p> <?php echo $lname ?> </p>
        </div>


        <div class='form-field'>
            <label> Age : </label>
            <input type="number" name="age" id='age'> 
            <p> <?php echo $ag ?> </p>
        </div> 

        <div class='form-field select'>
            <label> Designation: </label>
            <input type="radio" name="designation" value="Junior Programmar"> <span>Junior Programmar</span>
            <input type="radio" name="designation" value="Senior Programmar"> <span>Senior Programmar</span> 
            <input type="radio" name="designation" value="Project Lead"> <span>Project Lead</span> 
            <p> <?php echo $dg ?></p>
        </div> 

        <div class='form-field select'>
            <label> Preferred Language: </label>
            <input type="checkbox" name="JAVA" value="JAVA"> <span>JAVA</span>
            <input type="checkbox" name="PHP" value="PHP"> <span>PHP</span> 
            <input type="checkbox" name="C++" value="C++"> <span>C++</span> 
            <p> <?php echo  $lang?></p>
        </div> 

        <div class='form-field'>
            <label> Email : </label>
            <input type = "text" name= "email" id='email' > 
            <p> <?php echo $em?> </p>
        </div> 

        <div class='form-field'>
            <label> Password : </label>
            <input type = "password" name= "password" id='password' > 
            <p>  <?php echo $pg ?> </p>
        </div> 

        <div class='form-field'>
            <label> Please choose a file </label>
            <input type="file" name="myfile" >
            <p> <?php echo $fu ?> </p>
        </div>
    </div>

    <div class='form-btns'>
        <input type="submit" value="Submit" name="submit" >
        <input type="reset" value="Reset" > 
    </div>

</div>

</main>

</body>
</html>


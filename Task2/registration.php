<!DOCTYPE html>
<html>
<body>
<h1> Registration Form </h1><hr>
<form action="result.php" method="post">
First Name <br>
<input type = "text" name= "FirstName" > <br>
Last Name <br>
<input type = "text" name= "LastName" > <br>
Age <br>
<input type = "number" name="age"> <br>
Designation:    
<input type="radio" name="desigation" value="Junior Programmar">Junior Programmar
<input type="radio" name="desigation" value="Senior Programmar">Senior Programmar
<input type="radio" name="desigation" value="Project Lead">Project Lead <br>
Preferred Language:  
<input type = "checkbox" name="JAVA" value="JAVA">JAVA
<input type = "checkbox" name="PHP" value="PHP">PHP
<input type = "checkbox" name="C++" value="C++">C++ <br>
Email <br>
<input type = "text" name= "email" > <br> 
Password<br>
<input type = "password" name= "password" > <br>
Please choose a file
<input type="file" id="myFile" name="filename"> <br>
<input type="submit" value="Submit">
<input type="Reset" value = "Reset">
</body>
</html>
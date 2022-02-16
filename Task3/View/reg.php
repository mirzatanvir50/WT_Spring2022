<?php
include "../Control/result.php"
?>

<html>
<body>
    <h1> Registration Form </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> First Name : </td>
<td> <input type="text" name="firstname"> </td>
<td> <?php echo $fname ?> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lastname"> </td>
<td> <?php echo $lname ?> </td>
</tr>
<tr>
<td> Age : </td>
<td> <input type="number" name="age"> </td>
<td> <?php echo $ag ?> </td>
</tr>
<tr>
<td> Designation: </td>
<td> <input type="radio" name="desigation" value="Junior Programmar">Junior Programmar <br>
<input type="radio" name="desigation" value="Senior Programmar">Senior Programmar <br>
<input type="radio" name="desigation" value="Project Lead">Project Lead </td>
<td> <?php echo $dg ?> </td>
</tr>
<tr>
<td> Preferred Language: </td>
<td> <input type = "checkbox" name="JAVA" value="JAVA">JAVA
     <input type = "checkbox" name="PHP" value="PHP">PHP
     <input type = "checkbox" name="C++" value="C++">C++ </td>
     <td> <?php echo  $lang?> </td>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" > </td>
<td> <?php echo $em?> </td>
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > </td>
<td> <?php echo $pg ?> </td>
</tr>
<tr>
<td> Please choose a file </td>
<td> <input type="file" name="myfile"> </td>
<td> <?php echo $fu ?> </td>
</tr>
<tr>
<td> <input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset"> </td>
</tr>
</table>
</body>
</html>


<?php
include "modal.php";

if(isset($_POST['register']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $hobby=$_POST['hobbies'];
 $image=$_FILES['image']['name'];
 $temp_image=$_FILES['image']['tmp_name'];
 
 if((in_array($email,$emails)))
 {
     echo "Email already Exist";
     include "index.php";
 }elseif((in_array($name,$names)))
 {
     echo "User already Exist";
     include "index.php";
 }else
 {
     // here insert query can be run to insert data in DATABASE
     /*
     Example : $con->query("insert into TableName('name','email') values('$name','$email')");
     */
     
     echo "<h2 style='color:red;'>You registered Successfully !</h2>";
     echo "Detail : <br />";
     echo "<table>
        <tr><th>Name</th><th>Email</th><th>City</th><th>State</th><th>Hobbies</th><th>Image</th></tr>
        <tr><td>".$name."</td><td>".$email."</td><td>".$city."</td><td>".$state."</td><td>".$name."</td><td>".$hobby."</td><td>".$image."</td></tr>
        </table>";
 }
 
 
}
?>
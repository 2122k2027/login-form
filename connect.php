<?php

if(isset($_POST['submit']))
{

   $name=$_POST['username'];
   $pass=$_POST['password'];

   $hostpassword=password_hash($pass, PASSWORD_BCRYPT);

   $con=mysqli_connect('localhost','root','','demo');
   
   $sql="insert into sun (name,pass) values ('$name','$hostpassword')";
   $result=mysqli_query($con,$sql);

   if($result)
   {
    echo "add success";
   }
   else
   {
    echo "not add";
   }

}
  



?>
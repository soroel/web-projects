<?php
session_start();
$email=$_POST["emailaddress"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","schoolweb");

$sql="SELECT * FROM `users` WHERE `emailaddress`='$email' AND `password`='$password' ";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
if($row["emailaddress"]==$email && $row["password"]==$password){
  $_SESSION["email"]=$row["emailaddress"];
  $_SESSION["fullname"]=$row["fullname"];


  ?>
  <script>
      window.alert("Login successful!");
      window.location.href="users.php"

  </script>
  <?php
}else{
    ?>
    <script>
        window.alert("Login failed!");
        window.location.href="../pages/login.html"
  
    </script>
    <?php
   
}
?>
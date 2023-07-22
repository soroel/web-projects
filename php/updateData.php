<?php
$conn=mysqli_connect("localhost","root","","schoolweb");

$id=$_POST["id"];
$fullname=$_POST ["fullname"];
$email=$_POST["emailaddress"];
$phone=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["confirm_password"];

//sql update statement

$sql="UPDATE `users` SET `fullname` = '$fullname', `emailaddress` ='$email', `phonenumber` = '$phone', `password` = '$password', `confirm_password` = '$cpassword' WHERE `users`.`id` = $id";

$query=mysqli_query($conn,$sql);

if($query){
?>
<script>
    window.alert("Data updated successfully");
    window.location.href="users.php"
</script>
<?php

}else{
?>
<script>
    window.alert("Failed...could not update");
    window.location.href="users.php"
    </script>
<?php
}
?>



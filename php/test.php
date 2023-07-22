<?php

$conn=mysqli_connect("localhost","root","","schoolweb");
 



$day=$_POST["Day"];
$session=$_POST["Session"];
$experience=$_POST["Experience"];
$activity=$_POST["Activity"];
$mood=$_POST["Mood"];
$nutrition=$_POST["Nutrition"];
$age=$_POST["Age"];



$sql="INSERT INTO `test` (`id`, `Day`, `Session`, `Experience`, `Activity`, `Mood`, `Nutrition`, `Age`) VALUES (NULL, '$day', '$session', '$experience', '$activity', '$mood', '$nutrition', '$age')";
$query=mysqli_query($conn,$sql);


if($query){
    ?>
    <script>
        window.alert("Congratulations!Your results will be sent");
        window.location.href="../pages/register.html";
      // window.history.go(-);
        </script>
    <?php
}else{
    ?>
<script>
    window.alert("Test could not submit!");
    //window.location.href="../pages/register.html";
    window.history.go(-1);
</script>

    <?php
}

































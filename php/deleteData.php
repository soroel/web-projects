<?php

$conn=mysqli_connect("localhost","root","","gym");
$id=$_POST["id"];

//sql delete statement
$sql="DELETE FROM `users` WHERE `id`=$id";
$query=mysqli_query($conn,$sql);

if($query){
    ?>
    <script>
    window.alert("Data has been deleted successfully");
    window.location.href="users.php";


    </script>

    <?php

}else{
    ?>
<script>
    window.alert("Failed to delete");
    window.location.href="users.php";
 </script>

<?php
}
?>
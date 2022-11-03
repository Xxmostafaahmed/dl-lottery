<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include('connect.php');
?>






<?php

if($_POST['submit']){
    $idn=$_POST['idn'];
   $pasn= $_POST['passwordn'];


//    $query= "SELECT * FROM student WHERE  id='$id' AND password='$pas' ";
// $sql = " UPDATE `game` SET   name ='$idn' and password='$pasn' ";

$sql="UPDATE `game` SET `name`='$idn',`password`='$pasn' WHERE 1";


   $data =mysqli_query($cons,$sql);
//    $total = mysqli_num_rows($data);
   if($data){
    header('location:index.php');
    // echo"succ";

    
    

   }else{
    echo"f up";

   }
}

?>
<form action="" method="POST" autocomplete="off">
&nbsp;&nbsp;&nbsp;&nbsp;New id  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="idn"> <br> <br>
    New password <input type="text"  name="passwordn" required> <br> <br>
    <input type="submit" name="submit" value="Change password" required>
</form>



    
</body>
</html>
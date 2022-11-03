<style>
  .account{
    margin-top: 80px;
    height: 200px;
    width: 300px;
    border-radius: 9px;
    border: 2px solid black;
    margin-left: 40%;
    background-color: bisque;
  }
     .account input{
    height: 30px;
    width: 210px;
    margin-top: 30px;
    margin-left: 13%;
    border-radius: 7px;
  }
  .account button{
    height: 30px;
    width: 70px;
    margin-top: 30px;
    border-radius: 7px;
    margin-left: 45%;
  }
</style>
<?php
include('connect.php');
?>


<?php

if(isset($_POST['submit'])){
    $ido=$_POST['id'];
   $pas= $_POST['password'];


//    $query= "SELECT * FROM student WHERE  id='$id' AND password='$pas' ";
$sql = " select * from game where name ='$ido' and password='$pas' ";

   $data =mysqli_query($cons,$sql);
   $total = mysqli_num_rows($data);
   if($total){
    header('location:admin-login.php');


   }else{
    ?>
    <script>
    alert('Loging Fail');
    </script>
    <?php
   }
}

?>
<!-- loging page  -->
<div class="account">
<form action="" method="POST" autocomplete="off">
    <input type="text" name="id" class="id" id="id" placeholder="id" required>   <br>
     <input type="password"  name="password" class="password" id="password" placeholder="pasword" required>  <br>
    <button name="submit"  > LOGING  </button>
</form>
</div


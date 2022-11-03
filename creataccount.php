<style>
    .acc {
        margin-top: 10px;
        margin-left: 40%;
    }
    .acc button{
        margin-left: 10%;
    }
</style>

<?php
include('connect.php');
?>


<div class="acc">
    <form action="" method="POST">
        Name  <input type="text" name="name" placeholder="Name" required > <br> <br>

        Ph No <input type="number" name="phno" placeholder="Phone Num" required> <br> <br>
        <input name="submit" type="submit"></input>

    </form>
</div>


<?php
if(isset($_POST['submit'])){

    $na=$_POST['name'];

    $ph=$_POST['phno'];





    // $sql="INSERT INTO `crud`(`id`, `name`, `address`) VALUES ('[$id]','[$name]','[$address]')";

     $sql="INSERT INTO `creat`(`name`, `phno`)VALUES ('$na','$ph')";

    $result= mysqli_query($cons,$sql);
    //   if($result){
    //     echo"data insert successfully";
    // }else{
    //     echo(mysqli_error($cons));
    // }



}


?>

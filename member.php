<style>

    .teadh{
        margin-top: 100px;
    }
</style>
<?php
include('connect.php');
// ?>








<div class="table">
  <table>
    <form action="POST">
    <thead class="teadh">
    <tr>
    <!-- <th>Id</th> -->
    <th class="one">Name</th>
    <th class="two">Ph No</th>

  </tr>
            
<?php
// $sql="SELECT `id`, `name`, `address` FROM `crud`";
// $sql="SELECT `dll`, `bha`, `nas`, `dls`, `lott`, `dlm` FROM `lotterygame` ORDER BY id DESC LIMIT 1 ";
$sql="SELECT * FROM `creat` ";

// $sql="select * from crud";
$result=mysqli_query($cons,$sql);
if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_array($result)){

        $na1=$row['name'];

        $na2=$row['phno'];


        echo' <tr> 
        <td>'.$na1.'</td>
        <td>'.$na2.'</td>


        

       
      </tr>';


    }
}


?>



 
 
</table>
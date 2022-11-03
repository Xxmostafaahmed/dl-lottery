<!DOCTYPE html>
<html>
<head>
<style>
 th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-top: auto;
  text-align: center;
  margin-left: 20%;
  height: 30px;
  margin-left: 10px;
}

.table{
  margin-left: 50px;
    margin-top: -2px;
    width: 90%;
}
/* .table tr,th{
  border: 1px solid black;
  border-collapse: collapse;

} */
.col{
  background-color: brown;
}
.color2{
  background-color: red;
}
.navbar li {
    text-decoration: none;
    margin: 10px;
    display: flex;
    /* flex-direction: column-reverse; */
    float: left;
    /* margin-left: 249px;
    margin-bottom: -45px; */
  }
  .color{
    width: 30px;
    height: 30px;
    border: solid;
    display: inline-block;
    border-radius: 40%;
    /* margin-top: 1.6rem; */
  }
  #blue{
    background: blue;
  }
  #gray{
    background: gray;
  }
  #white{
    background: white;
  }
  #cyan{
    background-color:darkcyan ;
  }
.butt{
  margin-top: 2px;
    border: 2px solid black;
    width: 89.6%;
    margin-left: 50px;
    height: 200px;
}
.butt h1{
  text-align: center;
}
.butt p{
  margin-left: 500px;
    margin-top: -30px;
}
.butt button{
  margin-top: 20px;
    margin-left: 1px;
}
.only{
  margin-left: 50px;
  background-color: darkcyan;
  height: 20px;
  width: 90%;
}
.c1{
  background-color: red;
}
.c2{
  background-color: indianred;
}
.c3{
  background-color: green;
}
.c4{
  background-color: blue;
}
.c5{
  background-color: orange;
}
.c6{
  background-color: orangered;
}
.c7{
  background-color: deeppink;
}


</style>
</head>
<body>

<nav class="navbar">
      <ul class="navbar-lists" id="home">

        <li><a href="#"><span class="color" id="blue"></span></a></li>
        <li><a href="#"><span class="color" id="gray"></span></a></li>
        <li><a href="#"><span class="color" id="white"></span></a></li>
        <li><a href="#"><span class="color" id="cyan"></span></a></li>
      </ul>
  </div>
 <div class="butt">
  <h1>DL LOTTERY</h1> <br>
  <p>Daily Result Chart</p> <br> <p>CONTACT FOR RESULT SMS & CUSTOMER CARE:-_-_-_-_-_</p>
  <p> Search here to find the Previous Result <button> <a href="searchresult.php"> Search</a></button></p>
  </div>


<?php
include('connect.php');

?>





<table class="table">
  <tr>
    
    <th class="c1" >DROW TIME</th>
    <th class="c2" >DL LOXMI(*) </th> 
    <th class="c3" > BHAGYA(*)</th>
    <th class="c4" >NASEEB(*)</th>
    <th class="c5" >DL.SUPER(*)</th> 
    <th class="c6" >LOTTERY(*)</th>
    <th class="c7" >DL.MAGIC(*)</th>
    <th class="c7" >OPERATION</th>

  </tr>
  <?php
// $sql="SELECT `id`, `name`, `address` FROM `crud`";
$sql="SELECT * FROM `lotterygame`  WHERE (`date` > DATE_SUB(now(), INTERVAL 1 DAY))";
// $sql="SELECT `dll`, `bha`, `nas`, `dls`, `lott`, `dlm` FROM `lotterygame`";
// 
// SELECT * FROM `table` WHERE (`timestamp` > DATE_SUB(now(), INTERVAL 1 DAY));
// $sql="SELECT * FROM lotterygame  ORDER BY dll  DESC LIMIT 1";
// $sql="SELECT *FROM lotterygame ORDER BY  ASC LIMIT 1";
// $sql="select * from crud";
$result=mysqli_query($cons,$sql);
if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        // $id=$row['id'];
        // $name=$row['name'];
        // $address=$row['address'];
        $na=$row['time'];

        $na1=$row['dll'];

        $na2=$row['bha'];
        $na3=$row['nas'];
        $na4=$row['dls'];
        $na5=$row['lott'];
        $na6=$row['dlm'];

        echo' <tr> 

        
        <td>'.$na.' </td>

        <td>'.$na1.' </td>
        <td>'.$na2.'</td>   
        <td>'.$na3.'</td>
        <td>'.$na4.'</td>
        <td>'.$na5.'</td>
        <td>'.$na6.'</td>
    
        
        <td>
        <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delet.php? deletetime='.$na.'" class="text-light">Delate</a></button>
      
      </td>

       
      </tr>';


    }
}

?>





  <tbody>
    
    
  <!-- <tr>
 
 

    
    <td></td>
    <td></td>   
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr> -->

  

</tbody>
</table>
<div class="only">
Purchase of lottery using this website is strictly prohibited in the states where lotteries are banned. You must be above 18 years to play Online Lottery.
 playindialottery.com all rights reserved.
</div>


</body>
</html>

<script>
  
  const color = document.querySelectorAll('.color');
const body = document.querySelector('body');
console.log(color);
 color.forEach(function(color){
	 color.addEventListener('click',function(e){
		 console.log(e.target);

		 if(e.target.id==='blue'){
			 body.style.backgroundColor=e.target.id;
		 }

		 if(e.target.id==='gray'){
			body.style.backgroundColor=e.target.id;
		}

		if(e.target.id==='white'){
			body.style.backgroundColor=e.target.id;
		}

		if(e.target.id=='cyan'){
			body.style.backgroundColor=e.target.id;
		}
	 })

 })
</script>

<!DOCTYPE html>
<html>
<head>


<style>
 table,th, td {
    border: 1px solid lightgray;
    border-collapse: collapse;
    margin-top: auto;
    text-align: center;
    /*margin-left: 20%;*/
    height: 55px;
    margin-left: 10px;
    font-size: 27px;
}

.table{
  margin-left: 110px;
    margin-top: -2px;
    width: 75.2%;
}
table{
  margin-left: 110px;
    margin-top: -2px;
    width: 80%;
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
    margin: 70px -80px;
    margin-left: 70px;
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
    width: 75%;
    margin-left: 110px;
    height: 220px;
}
.butt h1{
  margin-left: 400px;

}
.butt p{
  margin-left: 400px;
    margin-top: -30px;
}
.butt button{
  margin-top: 20px;
    margin-left: 1px;
}
.only{
  margin-left: 110px;
    background-color: darkcyan;
    height: 55px;
    width: 75.3%;
}
.c1{
  color: red;
  font-size: 20px;

}
.c2{
  color: indianred;
  font-size: 20px;
  width: 10px;

}
.c3{
  color: green;
  font-size: 20px;

}
.c4{
  color: blue;
  font-size: 20px;

}
.c5{
  color: orange;
  font-size: 20px;

}
.c6{
  color: orangered;
  font-size: 20px;

}
.c7{
  color: deeppink;
  font-size: 20px;

}


</style>
</head>
<body>
<div id="display"></div>

<nav class="navbar">
      <ul class="navbar-lists" id="home">

        <li><a href="#"><span class="color" id="blue"></span></a></li>
        <li><a href="#"><span class="color" id="gray"></span></a></li>
        <li><a href="#"><span class="color" id="white"></span></a></li>
        <li><a href="#"><span class="color" id="cyan"></span></a></li>
      </ul>
  </div>
  <form action="searchresult.php" method="POST">
 <div class="butt">
  <h1>DL LOTTERY</h1> <br>
  <p>Daily Result Chart</p> <br> <p>CONTACT FOR RESULT SMS & CUSTOMER CARE:-_-_-_-_-_</p> <br>
  <p> Search here to find the Previous Result </p>
    <!-- <button> <a href="searchresult.php"> Search</a></button> -->
</p> <br> <br> <br>
<p id="p1"></p>
  <p>  <input type="date" name="search" required>  <button name="submit" id="search">Search</button></p>
  </form>

  </div>


<?php
include('connect.php');

?>






<table class="table" >


  <tr>
    
    <td class="c1" >DROW TIME</td>
    <td class="c2" >GOOD <br> MORNING</td> 
    <td class="c3" > GONPOTI</td>
    <td class="c4" >DL SUPER</td>
    <td class="c5" >NASEEB</td> 
    <td class="c6" >LOTTERY</td>
    <td class="c7" >RAJA  &nbsp; &nbsp;&nbsp;</td>
    

  </tr>
  
  

  <?php
date_default_timezone_set('Asia/Calcutta');
$cdate=date("Y-m-d",time());
$H=date("H",time());
//__________________
$time = date("h:i:s",time());//or equivalent
//print "---$time----<br />";
$timeParts = explode(":", $time);

//$h=date("h",time($timeParts[0]));
//$s=date("h",time($timeParts[2]));
$h=date("h",time());
$i=date("i",time());
$s=date("s",time());
//_______________________________

$ampm=date("A",time());
//print "<br />---------------$h:$i:$s $ampm-----<br />";
		
if($i>=0 && $i<=14)
	$i=00;
	
if($i>=15 && $i<=29)
	$i=15;

if($i>=30 && $i<=44){
	$i=30;
}

if($i>=45 && $i<=59){
	$i=45;
}

if($h>=9 && $h<12 && $ampm=="PM")
	$h=9;
if($h>=0 && $h<=9 && $ampm=="AM")
	$h=$h;
if($h==12 && $ampm=="AM")
	$h=9;

$h=$h+0;
if($h<10)
	$h="0".$h;
	
$i=$i+0;
if($i<10)
	$i="0".$i;
	

$ctime=$h.":".$i." ".$ampm;
//print $ctime; echo "<br />";echo $h;echo "<br />$cdate"; echo "<br />$H";


?>

  <?php



// include('current_res_time.php');
require_once('connect.php');
		  //if($ctime!='09:00 AM')
$start=0;
$end=0;
$q1="SELECT id 'start' FROM `result` WHERE date='$cdate' and time='09:00 AM'";
$q2="SELECT id 'end' FROM `result` WHERE date='$cdate' and time='$ctime'";

$r1=mysqli_query($cons, $q1);
while($row1=mysqli_fetch_array($r1)){
	$start=$row1['start'];	
}
$r2=mysqli_query($cons, $q2);
while($row2=mysqli_fetch_array($r2)){
	$end=$row2['end'];	
} 
if($end==0 && $H>=9){
	$q2="SELECT id 'end' FROM `result` WHERE date='$cdate' order by id desc limit 0,1";
$r2=mysqli_query($cons, $q2);
while($row2=mysqli_fetch_array($r2)){
	$end=$row2['end'];	
} 
}
     
$sql="SELECT * FROM result WHERE date='$cdate' and id between $start and $end order by id ";
  

// $sql="SELECT * FROM `result` WHERE (`date` > DATE_SUB(now(), INTERVAL 1 DAY))  ";



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

        echo ' <tr>
        

        
        
        <th>'.$na.' </th>

        <th>'.$na1.' </th>
        <th>'.$na2.'</th>   
        <th>'.$na3.'</th>
        <th>'.$na4.'</th>
        <th>'.$na5.'</th>
        <th>'.$na6.'</th>
    
        
    

       
      </tr>';


    }
}
mysqli_close($cons);


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

<script type="text/javascript">

var date = new Date();
	var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate();
	var current_time = date.getHours()+":"+date.getMinutes()+":"+ date.getSeconds();
	var date_time = current_date;	
	document.getElementById("p1").innerHTML = date_time;


  
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

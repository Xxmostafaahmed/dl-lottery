<?php
// if(!isset($_SESSION['user'])){
// 	include('connect.php');
// 	echo"<script language='javascript'>
// 		alert('Your session does not exist...')</script>";
// 		exit(0);
// }
include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>dl-lottery</title>
<style>
	        body {
           
          background-color: yellowgreen;

    
    /* margin-left: 250px; */
        }
        .elememt{
          height: 670px;
          width: 1000px;
          border: 10px solid peachpuff;
        border-radius: 10px;

        }

	        .admine h1 {
            margin-left: 6%;
        }

        .admine {
            margin-left: 30%;
        }

        .admine button {
            margin-left: 35%;
            height: 50px;
            width: 180px;
            background-color: blueviolet;
            margin: 20px;
            margin-top: -20px;
            border-radius: 8px;
        }

        .admine button:hover {
            background-color: brown;
        }
        .result button:hover{
            background-color: brown;
        }
		.datetime{
            margin-left: 38%;
        }
		#p1{
            margin-top: -21px;
          margin-left: 70px;
         font-size: 20px;
        }
        #time{
            margin-top: -21px;
         margin-left: 70px;
         font-size: 20px;

        }
        #tim{
            margin-top: -25px;
            margin-left: 120px;
        }

		table{
			margin-top: 30px;
		}
		.result{
			margin-top: 10px;
			margin-left: 20%;
		}
		button {
            /* margin-left: 35%; */

            height: 50px;
            width: 180px;
            background-color: blueviolet;
            border-radius: 8px;
            margin: 20px;
            margin-top: -20px;
        }

        .greslt button:hover {
            background-color: brown;
        }
        .mem button:hover{
            background-color: brown;
        }
        input{
          text-align: center;
        }
</style>




<script language="javascript">
//*****************************************DRAW TIME DISPLAY
window.setInterval('show4()',1000);
function show4(){
var xmlhttp;    

	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
//time left________________________________________________________________	
	xmlhttp.onreadystatechange=function()
  	{
  		if(xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.f.game_time.value=xmlhttp.responseText;
    	}
  	}

xmlhttp.open("GET","manualdisplaydraw.php",true);
//xmlhttp.open("GET","displaydraw.php",true);

xmlhttp.send();
}

//*****************************************************************


function valid(){
		str="";
		

		if(document.f.game_time.value==""){
			str+=">> Game time can not be blank\n";
		}

		if(document.f.sangam.value==""){
			str+=">> Good Morning can not be blank\n";
		}
		if(document.f.sangam.value.length<2){
			str+=">> Good Morning must be a two digit number\n";
		}
		
		var sp=document.f.sangam.value;
		if(isNaN(sp)){
		str+=">> Good Morning must be entered in numerical format\n";
    	}

		if(document.f.chetak.value==""){
			str+=">> Gonpoti can not be blank\n";
		}
		if(document.f.chetak.value.length<2){
			str+=">> Gonpoti must be a two digit number\n";
		}
		
		var sp=document.f.chetak.value;
		if(isNaN(sp)){
		str+=">> Gonpoti must be entered in numerical format\n";
    	}
		
		if(document.f.super.value==""){
			str+=">> Dl Super can not be blank\n";
		}
		if(document.f.super.value.length<2){
			str+=">> Dl Super must be a two digit number\n";
		}
		
		var sp=document.f.super.value;
		if(isNaN(sp)){
		str+=">> Dl Super must be entered in numerical format\n";
    	}
		
		if(document.f.mini.value==""){
			str+=">> Naseeb can not be blank\n";
		}
		if(document.f.mini.value.length<2){
			str+=">> Naseeb must be a two digit number\n";
		}
		
		var mn=document.f.mini.value;
		if(isNaN(mn)){
		str+=">> Naseeb must be entered in numerical format\n";
    	}
		
		if(document.f.jackpot.value==""){
			str+=">> Lottery can not be blank\n";
		}
		if(document.f.jackpot.value.length<2){
			str+=">> Lottery must be a two digit number\n";
		}
		
		var jp=document.f.jackpot2.value;
		if(isNaN(jp)){
		str+=">> Raja be entered in numerical format\n";
    	}	

		if(document.f.jackpot2.value==""){
			str+=">> Raja can not be blank\n";
		}
		if(document.f.jackpot2.value.length<2){
			str+=">> Raja be a two digit number\n";
		}
		
		var jp=document.f.jackpot.value;
		if(isNaN(jp)){
		str+=">> Raja be entered in numerical format\n";
    	}	

		
		if(str!=''){
			alert("Result Generation\n___________________________________\n\n"+str);	
			return false;
		}
		return true;	
}
</script>


</head>
<body>
  <div class="elememt">
<div class="admine">
        <h1>WEL COME ADMIN </h1> <br>
        <button > <a href="index.php"> Home Page </a></button>
        <button> <a href="changepassword.php"> Change Password </a></button>

    </div>
    <div class="datetime">
        Date &nbsp;<input type="text" name="date" id="date"> <p id="p1"></p>  <br>
        Time <input type="text" name="time" ><div id="time"></div>
    </div>


 

<div id="contents">
 	<form name="f" method="POST"  onsubmit="return valid();"> 
<table width="738" cellpadding="5" style="width:100%;">

  <td colspan="4" align="center"><b>Result Generation</b>
<br />(The fields marked as <font size="+1"><b>*</b></font> are mandatory fields)</td></tr>
<tr>
  <td width="331" align="right">Draw Time(<font size="+1"><b>*</b></font>)</td>
  <td width="453" align="left">
<input id="game_time" name="game_time" class="input1" type="text" readonly="readonly">

  </td>

  </tr>
 <tr>
  <td align="right">Good Morning (<font size="+1"><b>*</b></font>)</td>
  <td align="left">
	<input name="lottery1"  id="sangam" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
  </tr>

<tr>
  <td><div align="right">Gonpoti (<font size="+1"><b>*</b></font>)</div></td>
  <td align="left" colspan='3'>
	<input name="lottery2" id="chetak" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
</tr>
  
<tr>
  <td align="right">Dl Super (<font size="+1"><b>*</b></font>)</td>
  <td align="left">
	<input name="lottery3"  id="super" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
  </tr>

<tr>
  <td><div align="right">Naseeb (<font size="+1"><b>*</b></font>)</div></td>
  <td align="left" colspan='3'>
	<input name="lottery4" id="mini" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
</tr>
<tr>
  <td><div align="right">Lottery(<font size="+1"><b>*</b></font>)</div></td>
  <td align="left" colspan='3'>
	<input name="lottery5"  id="jackpot" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
</tr>
<tr>
  <td><div align="right">Raja(<font size="+1"><b>*</b></font>)</div></td>
  <td align="left" colspan='3'>
	<input name="lottery6"  id="jackpot2" class="input1" type="text" maxlength="2" onkeyup="javascript:result();"/></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <!-- <td align="left" colspan='3'> -->
    <!-- <button value="GENERATE RESULT" name="submit" style="width:140px;">&nbsp; -->

    <!-- <input type="reset" value="REFRESH" class="submit"/>&nbsp;  -->
     <!-- <input type="button" value="SEND SMS"class="submit" style="width:140px;" onclick="sms();" disabled="disabled"/> -->
    
</td></tr>

</table>
<div class="result">
	<button name="submit" id="submit" >Generation Result</button>
            <button class="rp" type="reset">Refresh page</button>
            <button > <a href="member.php">Member </a> </button>
	</div>
</form>
</div>

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


date_default_timezone_set('Asia/Calcutta');

$date=date("Y-m-d",time());

$q="select * from result where date='$date' and time='$ctime'";
	$r=mysqli_query($cons, $q);
	$rec2=mysqli_num_rows($r);
	//change done here $h>=9
	if($rec2==0 && $H>=9)
		$q="select * from result where date='$date' order by id desc limit 0,1";	
		
$r=mysqli_query($cons, $q);

$rec=mysqli_num_rows($r);
if(isset($_POST['submit'])){

    $na=$_POST['game_time'];

    $na1=$_POST['lottery1'];

    $na2=$_POST['lottery2'];
    $na3=$_POST['lottery3'];
    $na4=$_POST['lottery4'];
    $na5=$_POST['lottery5'];
    $na6=$_POST['lottery6'];
    
    


	// $selectedTime = "9:15:00";
    // $sql="INSERT INTO `crud`(`id`, `name`, `address`) VALUES ('[$id]','[$name]','[$address]')";
    $sql="INSERT INTO `result`(`dll`, `bha`, `nas`, `dls`, `lott`, `dlm`, `time`) VALUES
     ('$na1','$na2','$na3','$na4','$na5','$na6','$na')";
	// $sql="insert into result values('$id',now(),'$game_time','$dll','$bha','$nas','$dls','$lott','$dlm')";


    $result= mysqli_query($cons,$sql);
    //   if($result){
    //     echo"data insert successfully";
    // }
	// else{
    //     echo(mysqli_error($cons));
    // }






}


?>


  
</div>
</body>
</html>

<script>

	// ===============date==========
	// ============================

var date = new Date();
	var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate();
	var current_time = date.getHours()+":"+date.getMinutes()+":"+ date.getSeconds();
	var date_time = current_date;	
	document.getElementById("p1").innerHTML = date_time;
		// ===============time==========
	// ============================
	    
setInterval(()=>{
  const time = document.querySelector("#time");
    let date = new Date();
    let hour = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let day_night="AM";
    if(hour>12){
      day_night="PM";
      hour=hour-12;
    }
    if(hour<10){
      hour = " 0" +hour;
    }
    if(minutes<10){
      minutes = "0" + minutes;
    }
    if(seconds<10){
      seconds="0"+seconds;
    }
    time.textContent = hour +":"+ minutes  +":"+ seconds + ":" + day_night;
});
</script>

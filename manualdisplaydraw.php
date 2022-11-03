<?php
require_once('connect.php');
$date='';
date_default_timezone_set('Asia/Calcutta');

$date=date("Y-m-d",time());


	$q="select * from result where date='$date' order by id desc limit 0,1";


$r=mysqli_query($cons, $q);

$rec=mysqli_num_rows($r);
if($rec>0){

while($row=mysqli_fetch_array($r)){
	$time2=$row['time'];
}

}
else{

$time2="08:45 AM";	
}
mysqli_close($cons);

$h=substr($time2,0,2);
$i=substr($time2,3,5);
$ampm=substr($time2,6,8);

$h2=$h;
$i2=$i;
$i2=$i+15;


$ampm2=$ampm;

//Next draw time
if($i==00)
	$i2=15;
if($i==15)
	$i2=30;
if($i==30)
	$i2=45;
	
if($i>=45){
	$i2="00";
	$h2++;
	if($h2>=1 && $h2<12 && $ampm=="PM")
		$ampm2="PM";
	if($h2>=1 && $h2<12 && $ampm=="AM")
		$ampm2="AM";
	if($h2==12 && $ampm=="AM")
		$ampm2="PM";
	if($h2==12 && $i2==30 && $ampm=="PM")
		$ampm2="PM";
	
	if($h2==12 && $ampm=="PM")
		$ampm2="AM";
	if($h2==12 && $i2==30 && $ampm=="AM")
		$ampm2="AM";
	
}

//echo "$h2<br />$i2<br />$ampm2<br />";

if($h2<9 && $ampm2=="AM")
	$draw="09:00 AM";
	
//8:59 PM

else if($h2>9 && $h2<12 && $ampm2=="PM")
	$draw="09:00 AM";
//8:46 problem as 09:00 AM is coming

else if($h2==9 && $i2<15 && $ampm2=="PM")
	$draw="09:00 PM";	
else if($h2==9 && $i2==15 && $ampm2=="PM")
	$draw="09:00 AM";
	
else if($h2==12 && $ampm2=="AM")
	$draw="09:00 AM";
	
else if($h2>12 && $ampm2=="AM")
	$draw="09:00 AM";
else if($h2==12 && $ampm2=="PM"){
	$h2=$h2-12;
        
        if($h2==0)
               //$h2="0".$h2;
       $h2=12;

	//date_default_timezone_set('Asia/Calcutta');
	$h2=$h2+0;
	if($h2<10)
		$h2="0".$h2;
		
	$i2=$i2+0;
	if($i2<10)
		$i2="0".$i2;
	$draw=$h2.":".$i2." ".$ampm2;
	}

else if($h2>9 && $ampm2=="AM"){
		//date_default_timezone_set('Asia/Calcutta');

	//if($h2==11 && $i2==45)
		//$draw="12:00 PM";
	//else{		
		$draw=$h2.":".$i2." ".$ampm2;
		//}
		
		}		


	
//if($h2>=9 && $ampm2=="AM")
//error here if current time is 11:46 AM
else{
	/*if($i>=45){
		$h2++;
		$i2=00;	
	}*/
		
	if($h2>12)
		$h2=$h2-12;
	else
		$h2=$h2;
		
	$h2=$h2+0;
	if($h2<10)
		$h2="0".$h2;
		
	$i2=$i2+0;
	if($i2<10)
		$i2="0".$i2;
	//date_default_timezone_set('Asia/Calcutta');
	$draw=$h2.":".$i2." ".$ampm2;
	}
	

print "$draw";
?>
<?php
require_once('connect.php');
$r='';
$time='';
extract($_POST);
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d",time());
//check result table
$q="select time from result where date='$date' and time='$game_time'";
$rr=mysqli_query($cons, $q);

while($row=mysqli_fetch_array($rr)){
	$time=$row['time'];	
}

if($time==''){
//rid key generation
$rid=0;
$q5="select id from result order by id desc limit 0,1";
$r5=mysqli_query($cons, $q5);
while($row5=mysqli_fetch_array($r5)){
	$rid=$row5['id'];
}
if($rid==0)
	$rid=1;
else
	$rid++;
		
	// $q1="insert into result values($rid,now(),'$game_time','$sangam','$chetak','$super','$mini','$jackpot')";
	$q1="insert into result values($id,now(),'$game_time','$dll','$bha','$nas','$dls','$lott','$dlm')";
    
	// $q1="insert into result values($dll,now(),'$game_time','$bha','$nas','$dls','$lott','$id','$id')";

	$r=mysqli_query($cons, $q1);


//test for execution
if($r){
		include('test.php');
		echo "<script language=\"javascript\">alert(\"Result generated successfully\");</script>";

	//header('Location: http://localhost/lottery/test.php');
	//header("Location:http://localhost/lottery/test.php");
}
else{
		//header("Location:http://localhost/lottery/test.php");
	//header('Location: http://localhost/lottery/test.php');
	$err=mysqli_connect_error();
	include('test.php');
	echo "<script language=\"javascript\">alert(\"$err\");</script>";

	
}

}
else{
		//header("Location:http://localhost/lottery/test.php");
	//include('Location: http://localhost/lottery/test.php');
	include('test.php');
	echo "<script language=\"javascript\">alert(\"Result already exists\");</script>";
}
mysqli_close($cons);
?>
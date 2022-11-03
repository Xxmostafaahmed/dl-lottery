<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- ========================================================== -->

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

<!-- For current result        -->
<?php
// $sql="SELECT `id`, `name`, `address` FROM `crud`";
// $sql="SELECT `dll`, `bha`, `nas`, `dls`, `lott`, `dlm` FROM `lotterygame` ORDER BY id DESC LIMIT 1 ";
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

$sql="SELECT * FROM result WHERE date='$cdate' and id between $start and $end order by id DESC LIMIT 1";

// $sql="SELECT `dll`, `bha`, `nas`, `dls`, `lott`, `dlm` FROM `result`  WHERE (`date` > DATE_SUB(now(), INTERVAL 1 DAY)) ORDER BY id DESC LIMIT 1 ";
// $sql="SELECT * FROM lotterygame  ORDER BY dll  DESC LIMIT 1";
// $sql="SELECT *FROM lotterygame ORDER BY  ASC LIMIT 1";
// $sql="select * from crud";
$result=mysqli_query($cons,$sql);
if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_array($result)){
        // $id=$row['id'];
        // $name=$row['name'];
        // $address=$row['address'];
        $na1=$row['dll'];

        $na2=$row['bha'];
        $na3=$row['nas'];
        $na4=$row['dls'];
        $na5=$row['lott'];
        $na6=$row['dlm'];


                
        // <tr class="secondli" scope="dow">'.$na1.' </tr> 
    
        // <tr class="thiddli">'.$na2.'</tr>
    
        // <tr class="foudthli">'.$na3.'</tr>
    
        // <tr class="fifthli">'.$na4.'</tr>
    
        // <tr class="sisthli">'.$na5.'</tr>
    
        // <tr class="seventhli">'.$na6.'</tr>

        echo' <tr> 
        
    


       
      </tr>';


    }
}
mysqli_close($cons);


?>

<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- ========================================================== -->




<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- ========================================================== -->



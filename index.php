
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" >
  <title>dl-lottery</title>
  
  <!-- <link rel="stylesheet" href="style.css"> -->

  <style>
    body{
      background-color: blue;
      /* height: 1100px;
      width: 100%;
      border: 2px solid black; */
    }
    .container-img img {
      /* margin-left: %; */
    /* margin-top: 10x; */
    margin-top: -20px;
    height: 250px;
    width: 100%;
    /*margin-left: 1%;*/
}
.wrapper{
  display: flex;
    /* background: white; */
    /*margin-left: 1%;*/
    border-radius: 9px;
    background-color: aquamarine;
    height: 170px;
    margin-top: 3px;
  }
  .wrapper .dynamic-txts{
    margin-left: 200px;
    height: 70px;
    line-height: 70px;
    overflow: hidden;
    margin-top: -20px;
    margin-top: 5px;
  }
  .dynamic-txts li{
    list-style: none;
    color: #FC6D6D;
    font-size: 50px;
    /* font-weight: 400px; */
    position: relative;
    top: 0;
    /* margin-top: 10px; */
    animation: slide 12s steps(4) infinite;
  }
  @keyframes slide {
    100%{
      top: -360px;
    }
  }
  .dynamic-txts li span{
    position: relative;
    margin: 5px 0;
    line-height: 90px;
    margin-left: -30px;
    
  }
  .dynamic-txts li span::after{
    content: "";
    position: absolute;
    left: 0;
    margin-top: 10px;
    height: 100%;
    width: 100%;
    background:aquamarine;
    border-left: 2px solid #FC6D6D;
    animation: typing 3s steps(15) infinite;
  }
  @keyframes typing {
    40%, 60%{
      left: calc(100% + 30px);
    }
    100%{
      left: 0;
    }
  }
  .navbar li {
    text-decoration: none;
    margin: 10px;
    display: flex;
   
    float: left;

  }
  .color{
    width: 30px;
    height: 30px;
    border: solid;
    display: inline-block;
    border-radius: 40%;
  
  }
  #white{
    background: white;
    margin-left: -340px;
    margin-top: 20px;
  }
  #gray{
    background: gray;
    margin-left: 10px;
    margin-top: 20px;
  }
  #red{
    background: red;
    margin-left: 290px;
    margin-top: 20px;
  }
  /* #yellow{
    background: yellow;
    margin-left: 290px;
    margin-top: 20px;
  }
   */
  




.grid_container {
    border: 1px solid black;
    display: grid;
    grid-template-columns: 50px 50px 50px;
    grid-template-rows: 50px 50px;
    background-color: green;
    padding: 10px;
}

.small_btn {
    width: 65%;
    height: 65px;
    /* margin-top: 100px; */
    margin-left: 50px;
    border: 1px solid;
      padding: 10px;
      border-radius: 8px;
  
      box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
}

.big_btn {
    width: 100%;
    height: 50px;
}
.grid-item p{
  font-size: 25px;
  margin-top: -1px;
}



.grid-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
    margin-top: -80px;
    /* background-color: aquamarine;
    height: 180px;
    margin-top: -124px; */
}

#b1 p{
     margin: -8px;

  
  }
  #b1 span{
      font-size: 1px;
     
  }
  #b2 p{
    margin: -8px;
  
  }
  #b2 span{
      font-size: 25px;
     
  }

  #b3 p{
    margin: -8px;

  
  }
  #b3 span{
      font-size: 25px;
     
  }
  #b4 p{
  margin: -8px;
  
  }
  #b4 span{
    font-size: 25px;
  }
#time{
  font-size: 25px;
  color: red;
}
#time2{
  font-size: 25px;
  color: red;
}
#time1{
  font-size: 25px;
  color: red;
}
#demo{
  font-size: 25px;
  color: red;
}







  .table{

margin-top: 20px;


 width: 100%; 
/*margin-left: 1%;*/
}


table {
    /* border-collapse: collapse; */
    border-collapse: collapse;
  width: 100%;
   
  }
  
  td, th {
    border: 1px solid #999;
    padding: 0.5rem;
    text-align: center;
    height: 50px;
    width: 80px;
    border: solid;
    border-color: orange;

    
  }
   input{
    height: 20px;
    width: 25px;
    background-color: white;
    border-radius: 6px;
    border: 3px solid darkgreen;
  }
  .firstline{
    background-color: red;
  }
  .secondline{
    background-color: indianred;
  
  }
  .thirdline{
    background-color: green;
  
  }
  .fourthline{
    background-color: antiquewhite;
  
  }
  .fifthline{
    background-color: orange;
  
  }
  .sixline{
    background-color: orangered;
  
  }
  .sevenline{
    background-color: deeppink;
  
  }
  .c{
    background-color: antiquewhite;
    font-size: 23px;

  }
  tr,th{
    font-size: 20px;
  }


  



  #container1 {
    display: flex;
    width: 100%;
}

#first1 {
    /* border: 1px solid black;
    border-radius: 5px; */
    width: 95%;
    height: 20vh;
    margin-left: 2.5%;
}

.grid_container1 {
    border: 1px solid black;
    display: grid;
    grid-template-columns: 50px 50px 50px;
    grid-template-rows: 50px 50px;
    background-color: green;
    padding: 10px;
}

.small_btn1 {
  width: 55%;
    height: 60px;
    margin-top: 10px;
    margin-left: 50px;
    border-radius: 3px;
    border: 2px solid black;
    background-color: darkseagreen;
}

.big_btn1 {
    width: 100%;
    height: 50px;
}



.grid-container1 {
  display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
    background-color: aquamarine;
    height: 135px;
    width: 105%;
    margin-left: -2.5%;
    margin-top: 2px;
}



  #loading {
  width: 100%;
  height: 100vh;
  position: fixed;
  background:black
   url('img/rollup.gif')
    no-repeat center;
  z-index: 9999;

}

.orn p{
  /* margin-left: 10%; */
  color: chocolate;
  font-size: 17px;
  margin-top: -50px;
}
.orn span{
  color: black;
}


  
  </style>
</head>

  





<body onload="myload()">

  <div class="loading" id="loading">

</div>

 <?php
include('connect.php');
include('file.php');

?>

    <div class="container-img">
        <img src="img/dl.png" alt="">
    </div>

    <!-- animation  -->
    <div class="wrapper">
        <!-- <div class="static-txt">I'm a</div> -->
        <ul class="dynamic-txts">
          <li><span>CONTACT</span></li>
          <li><span>FOR </span></li>
          <li><span>RESULT</span></li>
          <li><span>-_-_-_-_-_</span></li>
        </ul>
        <nav class="navbar">
          <ul class="navbar-lists" id="home">
            
            <li><a href="#"><span class="color" id="white"></span></a></li>
            <li><a href="#"><span class="color" id="gray"></span></a></li>
            <li><a href="#"><span class="color" id="red"></span></a></li>
            <!-- <li><a href="#"><span class="color" id="yellow"></span></a></li> -->
          </ul>
        </div>
      </div>

      <!-- button part  -->

      <!-- <div id = "container"> -->
    <!-- <div id = "first"> -->
      <div class = "grid-container">
        <div class="grid-item">
    
        <button type = "button" id = "b1" class = "small_btn"><p>Next draw </p>  <div id="time2"></div></button>

      </button>
        </div>
        <div class="grid-item">
          <button type = "button" id = "b2" class = "small_btn"><p >Today date </p><span id="time1"></span></button>
        </div>
        <div class="grid-item">

          <button type = "button" id = "b3" class = "small_btn"><p>Now time</p>  <div id="time"></div></button>
        </div>
        <div class="grid-item">
          <button type = "button" id = "b4" class = "small_btn"><p > Time to draw</p> <span id="demo"></span></button>
        </div>

      </div>
    </div>






<!-- table data  -->
<div class="table" >
<!-- <div class="table" style="overflow-x:auto;"> -->

        <table>
          <form action="POST">
            <thead class="teadh">


              <tr>


                <th class="firstline"> Name</th>
                <th class="firstline">Sr</th>
                <th class="firstline">Win</th>
                <th class="firstline">0</th>
                <th class="firstline">1</th>
                <th class="firstline">2</th>
                <th class="firstline">3</th>
                <th class="firstline">4</th>
                <th class="firstline">5</th>
                <th class="firstline">6</th>
                <th class="firstline">7</th>
                <th class="firstline">8</th>
                <th class="firstline">9</th>
                <th class="firstline">Qty.</th>
                <th class="firstline">Amt.</th>
                <th class="c" id="updatedTime">Result</th>


              </tr>



              <tr>
                <td class="secondline">GOOD MORNING</td>
                <td class="secondline">A</td>
                <td class="secondline">100</td>
                <td class="secondline"><input name="button"> </input></td>
                <td class="secondline"> <input></input> </td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input></input></td>
                <td class="secondline"><input placeholder="0"></input></td>
                <td class="secondline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na1$row[dll]"; ?>
                </td>
              </tr>



              <tr>
                <td class="thirdline">GONPOTI</td>
                <td class="thirdline">B</td>
                <td class="thirdline">100</td>
                <td class="thirdline"><input name="button"> </input></td>
                <td class="thirdline"> <input></input> </td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input></input></td>
                <td class="thirdline"><input placeholder="0"></input></td>
                <td class="thirdline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na2$row[bha]"; ?>
                </td>
              <tr>
                <td class="fourthline">DL.SUPER</td>
                <td class="fourthline">C</td>
                <td class="fourthline">100</td>
                <td class="fourthline"><input name="button"> </input></td>
                <td class="fourthline"> <input></input> </td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input></input></td>
                <td class="fourthline"><input placeholder="0"></input></td>
                <td class="fourthline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na3$row[nas]"; ?>
                </td>
              </tr>


              <tr>
                  <td class="fifthline">NASEEB</td>
                
                <td class="fifthline">D</td>
                <td class="fifthline">100</td>
                <td class="fifthline"><input name="button"> </input></td>
                <td class="fifthline"> <input></input> </td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input></input></td>
                <td class="fifthline"><input placeholder="0"></input></td>
                <td class="fifthline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na4$row[dls]"; ?>
                </td>
              </tr>


              <tr>
                <td class="sixline">LOTTERY</td>
                <td class="sixline">E</td>
                <td class="sixline">100</td>
                <td class="sixline"><input name="button"> </input></td>
                <td class="sixline"> <input></input> </td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input></input></td>
                <td class="sixline"><input placeholder="0"></input></td>
                <td class="sixline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na5$row[lott]"; ?>
                </td>
              </tr>

              <tr>
                <td class="sevenline">RAJA</td>
                <td class="sevenline">F</td>
                <td class="sevenline">100</td>
                <td class="sevenline"><input name="button"> </input></td>
                <td class="sevenline"> <input></input> </td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input></input></td>
                <td class="sevenline"><input placeholder="0"></input></td>
                <td class="sevenline"><input placeholder="0"></input></td>
                <td class="c">
                  <?php echo "$na6$row[dmls]"; ?>
                </td>
              </tr>
              </tbody>
        </table>
        </form>
        </thead>
        <?php ?>
      </div>







  <div id = "container1">
    <div id = "first1">
      <div class = "grid-container1">
        <div class="grid-item">
          <button type = "button" id = "bt1" class = "small_btn1"><a href="resultchart.php"> RESULT CHART</a></button>
        </div>
        <div class="grid-item">
          <button type = "button" id = "bt2" class = "small_btn1"><a href="creataccount.php">CREAT ACCOUNT</a></button>
        </div>
        <div class="grid-item">
          <button type = "button" id = "bt3" class = "small_btn1"><a href="howtoplay.php"> HOW TO PLAY </a></button>
        </div>
        <div class="grid-item">
          <button type = "button" id = "bt4" class = "small_btn1"><a href="admin.php"> Admin</a></button>
        </div>

      </div>
      <div class="orn">
 <p> Purchase of lottery using this website is strictly prohibited in the states where lotteries are banned. You must be above 18 years to play Online Lottery. 
 <span>@Dl-Lottery.com all rights reserved.</span> </p>
</div>
    </div>

</div>

</body>
</html>
<script>

  // =============Time=============
  // ==============================
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



// ==================Next draw=============
// ======================================
setInterval(funSetTime, 1000);

function funSetTime() {

	let setime = document.getElementById("time2")

	let min = new Date().getMinutes();
	let hour =new Date().getHours();
	let status = ""
	console.log(min);
	if (hour > 20 || hour < 9) {

		setime.innerText = "09:00 AM";

	} else {
		if (hour > 12) {
			hour = hour - 12
			status = "PM"

		}
		else if (hour < 12) {
			status = "AM"

		}
		else if (hour == 12) {
			status = "PM"
		}
		if (min > 0 && min <= 15) {
			setime.innerText = hour + " : " + 15 + " " + status

		}
		if (min > 15 && min <= 30) {
			setime.innerText = hour + " : " + 30 + " " + status

		}
		if (min > 30 && min <= 45) {
			setime.innerText = hour + " : " + 45 + " " + status

		}
		if (min > 45 && min <= 60) {
			setime.innerText = hour+1 + " : " + "00" + " " + status

		}

	}



}


// ================Date=============
// =================================
let a;
let date;
// let time2;
// let d;


// const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
setInterval(() => {


    a = new Date();
    
    date = a.toLocaleDateString();
    
    // time = a.getHours() + ':' + a.getMinutes()  ;
    time2 = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
    
    
    // currentDate = new Date(); var futureDate = new
    // tim =  a.getMinutes() + ':' +  a.getSeconds() ;
    // document.getElementById('demo').innerHTML =  tim;


    // Date(currentDate.getTime() + getMinutes*60000)
    // document.getElementById('time').innerHTML =  time;
    document.getElementById('time1').innerHTML =  date;
    // document.getElementById('time2').innerHTML =  time2;


}, 1000);


// =============Time to draw===========
// =================================

// this on is for btn4 
var countDownDate = new Date("Sep 25, 9999 12:15:00").getTime();
  
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var hour=new Date().getHours();
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

    var minutes = Math.floor((distance % (1000 * 15 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
    document.getElementById("demo").innerHTML = 0*hours + "0 " + ": " + minutes + ": " + seconds ;
    
    // If the count down is over, write some text 
    // if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("demo").innerHTML = "EXPIRED";
    // }
    // if(hour>=21 ||hour== 24){
    // document.getElementById("demo").innerHTML = "Time Over";
    // }
    // if(hour==21 || hour==9){
    // document.getElementById("demo").innerHTML = "Time Over" ;

    // }
   


}, 1000);

  
  // =================color==============
  // ================================
  const color = document.querySelectorAll('.color');
const body = document.querySelector('body');
console.log(color);
 color.forEach(function(color){
	 color.addEventListener('click',function(e){
		 console.log(e.target);

		 if(e.target.id==='white'){
			 body.style.backgroundColor=e.target.id;
		 }

		 if(e.target.id==='gray'){
			body.style.backgroundColor=e.target.id;
		}

		if(e.target.id==='red'){
			body.style.backgroundColor=e.target.id;
		}

		if(e.target.id=='yellow'){
			body.style.backgroundColor=e.target.id;
		}
	 })

 })

//  ==============btn=============
// ==============================
 //  button part 

function myfunctionacc(){
    location.href="account.html";
}
function myfunctionhp(){
    location.href="howtoplay.html";
}

// ===============Preload==============
// ==================================
// preloader 

var preloader = document.getElementById("loading");
function myload(){
   preloader.style.display='none';
}
// ==============Refresh===============
// ===================================
// auto refresh 
setTimeout(function(){
  location.reload();
},59400);
</script>




<!-- <script src="script.js"></script> -->


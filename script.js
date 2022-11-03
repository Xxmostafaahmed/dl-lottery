let a;
let date;
let time2;
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
    document.getElementById('time2').innerHTML =  time2;


}, 1000);




// this on is for btn4 

var countDownDate = new Date("Sep 25, 9999 00:15:00").getTime();
  
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

    var minutes = Math.floor((distance % (1000 * 15 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
    document.getElementById("demo").innerHTML = 0*hours + "0 " + ": "
    + minutes + ": " + seconds ;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);


//   next drow time ================================
  // let ut = document.getElementById("updatedTime")

  // setInterval(() => {

  //   let dt = new Date();
  //   dt.setMinutes(dt.getMinutes() + 10)
  //   ut.innerText = "  " + dt.toLocaleTimeString();

  // }, 1000)



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

 // aaccount part loging part 


//  function myfunctionadmin(){
//     var id = document.getElementById("id").value;
//     var password = document.getElementById("password").value;
//     if ( id=="admin"&&password=="mo"){
        
//       alert("loging succesfully")
//     location.href="http://127.0.0.1:5500/admin-loging.html";

//       // return false;
//     }else{
//       alert("loging failed")
//     }

//   }


//   function myfunctionadmin(){
//     location.href="admin-login.php";
//   }

  

//  button part 

function myfunctionacc(){
    location.href="account.html";
}
function myfunctionhp(){
    location.href="howtoplay.html";
}

// preloader 


var preloader = document.getElementById("loading");
function myload(){
   preloader.style.display='none';
}
// $(window).load(function(){
//     $('#loading').fadeOut();
//     $('#loading-url').delay(150).fadeOut
//     ('slow');
//   }),4000;













 








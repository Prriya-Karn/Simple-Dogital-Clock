<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>clock</title>
	</head>

<style>
	body{
		background-color: 	#008080 ;
	}
	.time{  


		border-radius: 20px;
		height: 300px;
		width: 40%;
		margin: auto;
		padding-top: 50px;
		margin-top: 10%;
		background-color: white;
	/*	box-shadow: 10px 10px 10px 10px solid teal*/
		box-shadow: rgba(0, 0, 0, 0.35) -30px 30px 20px;
		/*box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;*/
		


	}

	#text{
		text-align: center;
		font-size: 40px;
		color: teal;
		background-color: white;
		width: 50%;
		height: 40%;
		margin: auto;
		margin-top: 20px;
		padding: 20px;


	}

	#demo{
		color: black;
		font-size: 50px;
		text-align: center;



	}

	#demo1{
		color: black;
		font-size: 50px;
		text-align: center;



	}



button{

	width : 20%;
    padding : 4px;
    font-weight: bold;
	text-align: center;
	font-size: 20px;
	color: teal;
	margin: auto;
	margin-left: 20%;
	border-radius: 8px;
	border-color: teal;
	cursor: pointer;
	overflow: hidden;
	transition: all 0.8s;




}

button:hover{
  transform: scale(1.5,1.5);
}

        



</style>	
	<body>
 <p id="text">DIGITAL CLOCK</p>

<div class="time">

<div id="demo1">
	Current Date
</div>
<br><br>
<div id="demo">

   Current Time
    
</div>


<br><br><br><br>

<button id="butt" onclick="set = setInterval(funexpr,1000)" >
   Start
</button>


 

<button onclick="clearInterval(set)">
    Stop
</button>



</div>




<script>

var funexpr = () => {
    
    var reference = document.getElementById('butt');
    
    let currTime = new Date();
    
    var a = document.getElementById('demo').innerHTML = `${currTime.toLocaleTimeString()}`
    document.getElementById('demo').style.color = "teal"


    document.getElementById('demo1').innerHTML = `${currTime.toLocaleDateString()}`;

      document.getElementById('demo1').style.color = "teal"

}











// const reference = document.getElementById('butt');      
// reference.addEventListener('click',() => {           //time not working in addEventListener;

   
//     document.getElementById('demo').innerHTML = "Loading"
//       let currTime = new Date()
//     let a = setInterval(() => {
//         document.getElementById('demo').innerHTML = `${currTime.toLocaleTimeString()}`;
//         currTime++;
         
        
//     },1000)                                                                                                                                                                             
   
// })


// document.write("<br>")
// let currTime = new Date();
// document.write(currTime.toLocaleTimeString())
    
</script>

	</body>
	</html>
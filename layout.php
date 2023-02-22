<?php
return '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Laravel Developer Test</title>
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="./style.css">
  </head>
  <style>
   
		
  </style>
  <body>
	<script src="index.js"></script>
	
	<div class="main_container">
		
		<aside class="p-3">
			<div id ="logo"><img src="./logo/logo.png"/></div>
			<ul class="navbar-nav mr-auto">	
					<li class="nav-item">
						<i class="fa-solid fa-eye"></i><a class="nav-link" href="index.php">View Task</a>
					</li>
			 
				  <li class="nav-item ">
					<i class="fa-solid fa-plus"></i><a class="nav-link" href="create.php">Create Task</a>
				  </li>
				 
				  
			  
			</ul>
		</aside>
		<main>
			<header class="d-flex justify-content-between p-2">
						<h2><i class="fa-solid fa-bars"></i></h2>
					
					<ul>	
					<li class="nav-item">
						<i class="fa-solid fa-user"></i><a class="nav-link" href="#">Log Out</a>
					</li>
			 
				
				 
				  
			  
			</ul>
					
			</header>
			<section class="p-2" style="background:white">
					   change
			</section>
			
		</main>
		<footer class="text-center p-1 font-weight-bold">
			This is at Test Project created by Okom Emmanuel
		</footer>
	</div>
  </body>';
  ?>
  <script>
 document.addEventListener("DOMContentLoaded", function() {
  
	selectTask();
	
});

function selectTask(){
	
	
	 $.ajax({
		type:"GET",
		url:"http://127.0.0.1:8000/api/task",
		headers: {
                'Content-Type':'application/json',
                    'Access-Control-Allow-Origin':'*',
                    'Access-Control-Allow-Methods':'POST,PATCH,OPTIONS'
                
            },
		success: function(data) { 
		   createTable(data);
		},
		 error: function (error) {
                console.log(error);
            }
	
		
	});
	
}
function createTable(myArray) {
console.log(myArray);
 let result = " ";
   for(let i=0; i<myArray.length; i++){
		let c= i;
		c++;
    result +="<tr>";
			result +="<td>" + c +"</td>";
			result +="<td>"+myArray[i]['taskname']+"</td>";
			result +="<td>"+myArray[i]['taskdescription']+"</td>";
			result +="<td>"+myArray[i]['completion_date']+"</td>";
			
			result +="<td onclick='edit(this)'><span class='hid'>"+myArray[i]['id']+"/"+"</span><span>Edit</span></td>";
			result +="<td onclick='del(this)'><span class='hid'>"+myArray[i]['id']+"/"+"</span><span>Delete</span></td>";
			
			//result +=myArray[i]['id'];
		
	  result += "</tr>"; 
		
	}
$("#body").append(result);
    console.log(result);
}

function del(e){
	
	var text = $(e).text();
	text=text.split("/");
	let val=text[0];
	alert('Deletion successful');
	
}
function edit(e){
	
	var text = $(e).text();
	text=text.split("/");
	let val=text[0];
	alert('Deletion successful');
	
}
  </script>
</html>
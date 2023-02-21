<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Laravel Developer Test</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </head>
  <style>
    body{
		background:rgb(240,242,245);
	   margin:0;
	   padding:0;
	   box-sizing: border-box;
	 
	
	}
	  a{
		  text-decoration:none;
		}
		li{
		  list-style-type:none;
		}
		.main_container{
			
			display:grid;
			height:100vh;
			grid-template-columns: repeat(12, 1fr);
			grid-template-rows: min-content auto;
		}
		
	  footer{
			grid-column-start:1;
			grid-column-end:13;
			background:white;
		}
		aside{
			 grid-column-start:1;
			grid-column-end:4;
			height:100vh;
			background:white;
		}
		main{
			 grid-column-start:4;
			grid-column-end:13;
			
			
			
		}
		section{
			background:white;
			height:400px;
			margin:1em;
		}
		
		.nav-item{
			display:flex;
			align-items:baseline;
		}
		.fa-solid{
			color:blue;
			
			font-size:15px;
			margin-right:3px;
		}
		#logo{
			display:flex;
			margin-bottom:1em;
		}
		header{
			background:white;
			margin-left:1em;
		}
		
		
		
  </style>
  <body>
	<script src="index.js"></script>
	
	<div class="main_container">
		
		<aside class="p-3">
			<div id ="logo"><img src="./logo/logo.png"/><h1>Laravel Test</h1></div>
			<ul class="navbar-nav mr-auto">	
					<li class="nav-item">
						<i class="fa-solid fa-eye"></i><a class="nav-link" href="#">View Task</a>
					</li>
			 
				  <li class="nav-item ">
					<i class="fa-solid fa-plus"></i><a class="nav-link" href="#">Create Task</a>
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
					Create
			</section>
			
		</main>
		<footer class="text-center p-1 font-weight-bold">
			This is at Test Project created by Okom Emmanuel
		</footer>
	</div>
  </body>
  <script>
function createTask(){
	  
	
	 $.ajax({
		type:"POST",
		url:"http://127.0.0.1:8000/api/task",
		headers: {
                'Access-Control-Allow-Origin':'localhost',
				'Content-Type':'application/json',
				'Access-Control-Allow-Methods':'POST',
				
                
            },
		contentType: 'application/json; charset=utf-8',
		data: { 
			 taskname:'ok', 
			 taskdescription:'sender',
			 completion_date:'sender',
			
			},
			success: function(data) { 
			console.log(data); 
			},
		 error: function (error) {
                console.log(error);
            }
	});
}
function selectTask(){
	
	
	 $.ajax({
		type:"GET",
		url:"http://127.0.0.1:8000/api/task",
		headers: {
                'Access-Control-Allow-Origin':'*',
                
            },
		success: function(data) { 
			console.log(data); 
		},
		 error: function (error) {
                console.log(error);
            }
	
		
	});
	
}
  </script>
</html>
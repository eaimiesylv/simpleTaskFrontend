<?php


					$form='<form action="#">
					  <div class="form-group">
						<label for="taskname">Task Name</label>
						<input type="text" class="form-control" placeholder="Enter Task Name" id="taskname">
					  </div>
					  <div class="form-group">
						<label>Task Description:</label>
						<textarea class="form-control" placeholder="Enter task description" id="description"></textarea>
					  </div>
					  <div class="form-group">
						<label>Completion Date</label>
						<input type="date" class="form-control" placeholder="Enter Task Name" id="date">
					  </div>
					 
					  
					   <button type="submit" onclick="createTask()" class="btn btn-primary">Create Task</button>
					</form>';
					
					$out=include("layout.php");
					$content = str_replace("change", "$form",$out);
					echo $content;





?>
  <script>
function createTask(){
//alert('ok');
	  let taskname=$("#taskname").val();
	   let description=$("#description").val();
	    let date=$("#date").val();
			
	 $.ajax({
		type:"POST",
		url:"http://127.0.0.1:8000/api/task",
		headers: {
                   'Content-Type':'application/json',
                    'Access-Control-Allow-Origin':'*',
                    'Access-Control-Allow-Methods':'POST,PATCH,OPTIONS'
                
            },
		
		data: { 
			 taskname:JSON.stringify(taskname),
			 //taskdescription:JSON.stringify(description),
			 //completion_date:'2022-10-12'
			 
			
			},
			success: function(data) { 
			  alert(data);
			},
		 error: function (error) {
                console.log(error);
            }
	});
}

  </script>
</html>
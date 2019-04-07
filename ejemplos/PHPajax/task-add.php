<?php
      
     include('database.php');

     if(isset($_POST['name'])){
     	$task_name = $_POST['name'];
     	$task_description = $_POST['description'];
     	$query = "INSERT INTO task (name, description) VALUES ('$task_name', '$task_description')";
     	$result = mysqli_query($connection, $query);
     	if(!$result){
     		die('Query Field');
     	}
     	echo 'Task Added Successfully';

     }

?>
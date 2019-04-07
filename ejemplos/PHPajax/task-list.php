<?php
   
    include('database.php');

    $query = "SELECT * FROM task";
    $result = mysli_query($connection, $query);

    if(!result) {
    	die('Query Faild' . mysqli_error($connection));
    }
    $json=array();

    while($row = mysqli_fetch_array($result)){
    	$json[] = array(
    		'name' => $row['name'],
    		'discription' => $row['description'],
    		'id' => $row['id']
    	);
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

?>
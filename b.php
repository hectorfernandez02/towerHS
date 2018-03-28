<?php

if( isset($_POST['values']) && isset($_POST['operation']) && ((is_numeric($_POST['values'][0]) && is_numeric($_POST['values'][0])))){
	$values = $_POST['values'];
	$operation = $_POST['operation'];
	$json['Status'] = "OK";
	if($operation == "sum"){
		$json['Result'] = $values[0]+$values[1];
		
	}else if($operation == "subtraction"){
		$json['Result'] = $values[0]-$values[1];
		
	}else if($operation == "division"){
		if($values[1] > 0){
			$json['Result'] = ($values[0]/$values[1]);
			
		}else{
			$json['Status'] = "error";
			$json['Result'] = 0;
		}
	}else if($operation == "multiplication"){
		$json['Result'] = ($values[0]*$values[1]);
	}else{
		$json['Status'] = "error";
		$json['Result'] = 0;
	}	
}else{
	// Not define
	$json['Status'] = "error";
}

	header('Content-type: application/json; charset=utf-8');
    echo json_encode($json , JSON_FORCE_OBJECT);
    exit;

    //Héctor Fernández
    // Montevideo, Uruguay
    // hectorfernandez02@gmail.com
?>
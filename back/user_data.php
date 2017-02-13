
<?php
    
    require 'jsonaccess.php';
    
    $type = $_POST["r_type"];
    if($type == 'save_equations'){
    	
    	$eqList = $_POST["eqList"];
        $userID = $_POST["userID"];
      	echo writeEquations($userID,$eqList);

    }
    else if($type == 'get_equations'){
        
        $userID = $_POST["userID"];
        echo json_encode(getEquations($userID));
    }else if($type == 'save_grid'){
        
        $grid = $_POST["grid"];
        $userID = $_POST["userID"];
        echo saveGrid($userID,$grid);

    }else if($type == 'load_grid'){
        
        $userID = $_POST["userID"];
        echo json_encode(loadGrid($userID));

    }

?>
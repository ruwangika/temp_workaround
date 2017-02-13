<?php

	$userdataFile = "../data/userdata.json";

	function writeEquations($userID,$eqList){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		$userdata[$userID]["EqList"] = $eqList;
		file_put_contents($userdataFile, json_encode($userdata,TRUE));
		return True;
	}

	function getEquations($userID){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		if(isset($userdata[$userID])){
			if(isset($userdata[$userID]["EqList"])){
				return $userdata[$userID]["EqList"];
			} 
		}
		return [];
	}

<<<<<<< HEAD
	function saveGrid($userID,$grid, $theme){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		$userdata[$userID]["Grid"] = $grid;
	 	$userdata[$userID]["Theme"] = $theme;
=======
	function saveGrid($userID,$grid){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		$userdata[$userID]["Grid"] = $grid;
>>>>>>> 7ad1bc350564a1a362c729a57a979f36d83778e1
		file_put_contents($userdataFile, json_encode($userdata,TRUE));
		return True;	
	}

	function loadGrid($userID){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		if(isset($userdata[$userID])){
			if(isset($userdata[$userID]["Grid"])){
				return $userdata[$userID]["Grid"];
			}
			 
		}
<<<<<<< HEAD
		return [];		
	}

	function loadTheme($userID){
		global $userdataFile;
		$userdata = json_decode(file_get_contents($userdataFile),TRUE);
		if(isset($userdata[$userID])){
			if(isset($userdata[$userID]["Theme"])){
				return $userdata[$userID]["Theme"];
			}			 
		}
		return [];		
	}	

=======
		return [];
		
	}

>>>>>>> 7ad1bc350564a1a362c729a57a979f36d83778e1
?>
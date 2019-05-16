<?php

	if(isset($_POST['convert'])){

		//$mul=$_POST['km']*1.1;
		//echo $mul;
		if(empty($_POST['km']) && empty($_POST['mile']))
			echo "Enter a value in any one field";
		else if(empty($_POST['mile'])){
			$ans=$_POST['km']/1.609;
			echo $_POST['km']." km(s) in miles is: ".$ans;
		}
		else if(empty($_POST['km'])){
                        $ans=$_POST['mile']*1.609;
                        echo $_POST['mile']."mile(s) in kilometers is: ".$ans;
		}
		else{
			echo "Enter in only one field";
			//header("location: distance.html");
		}
	}
	if(isset($_POST['reset'])){

		header("location: distance.html");

	}

?>

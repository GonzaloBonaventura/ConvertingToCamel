<!DOCTYPE html>
<html>
<head>
	<title>hola</title>
</head>
<body>
	<?php
	toCamelCase("gran_maestro");
	function toCamelCase($str){
		$primero = true;
		$letters = "";
		$output = "";
		$length = strlen($str);
		$thisWordCodeVerdeeld = array();
		for ($i=0; $i<$length; $i++) {
			if ($i == 0 && $str[$i] != '-' && $str[$i] != '_') {
		  	  $output .= $str[$i];
		  	  $letters = "";
			}else{
				if ($str[$i] == '-' || $str[$i] == '_')  {
			    	if ($primero == true) {
			    		$output .= strtolower($letters);
			    		$letters = "";
			    	}else{
			    		$letters == strtolower($letters);
			    		$output .= ucfirst($letters);
			    		$letters = "";
			    	}
			    		var_dump($output);

			    }else{
				    $letters .= $str[$i];
			 	}
			 	if ($i == $length -1) {
			 		if ($primero == true) {
			    		$output .= strtolower($letters);
			    		$letters = "";
			    	}else{
			    		$letters == strtolower($letters);
			    		$output .= ucfirst($letters);
			    		$letters = "";
			    	}
			 	}
			    		var_dump($output);
			 	
			}


		    
		    
		}
		echo $output . "<br>";
		echo ucfirst("hola");;
	}
	?>
</body>
</html>


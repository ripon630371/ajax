<?php 
	
		include dirname(__FILE__)."/functions.php";
	
		$obj = new Ajax();
		
		
		
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			
			if( empty($name)  || empty($email) ){
				echo "<h2 style='color:red;'>Field Must not be Empty</h2>";
			}else{
				
				$data = $obj -> dataInsert($name, $email, $cell );
				
				echo $data;
			}
			
		
	
	?>
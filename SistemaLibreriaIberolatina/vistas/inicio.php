<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>

	
</head>
<body style="background-color: aquamarine">

				
				
				
					
					
					
				
			
		
	
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>
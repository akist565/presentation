<html>
	
<body>
	
<?php
	/* GET THE NAME OF UPLOADED FILE */
	$filename = $_FILES['file']['name'];
	
	
	/* CHOOSE SAVE LOCATION OF FILE UPLOADED*/
	$location = "upload/".$filename;
	
	 
	/*	SAVE UPLOADED FILE TO THE LOCAL FILESYSTEM */
	if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
		echo '<p>File Uploaded Successfully!</p>';
	}else{
		echo '<b>Error Uploading File.</b>';
		
	}
?>
	
	
	
	
	
</body>
</html>
<!doctype html>
<html>
<head>
	<style>
		@use postcss-preset-env {
  stage: 0
}

body {
  min-height: 100vh;
  display: grid;
  align-items: center;
}

form {
  display: flex;
  flex-wrap: wrap;
  
  & > input {
    flex: 1 1 10ch;
    margin: .5rem;
    
    &[type="email"] {
      flex: 3 1 30ch;
    }
  }
}

input {
  border: none;
  background: hsl(0 0% 93%);
  border-radius: .25rem;
  padding: .75rem 1rem;
  
  &[type="submit"] {
    background: hotpink;
    color: white;
    box-shadow: 0 .75rem .5rem -.5rem hsl(0 50% 80%);
  }
}

	
	</style>
<meta charset="utf-8">
<title>PHP File Upload Example</title>
</head>

<body>
	<h1 class="imageFormHead">Click Below to Upload an Image Of Your Vehicle Registration</h1>
<!-- Accept Image Form !-->
<form class="imageForm" action="upload.php" method="post" enctype="multipart/form-data" >
	<input type="text" 		name="First Name"	value="firstName" />
	<input type="text" 		name="Last Name"	value="lastName" />
	<input type="text" 		name="Street Name"	value="street" />
	<input type="number"	name="Address"		value="address" />
	<input type="file" 		name="file" />
	<input type="submit" 	value="Upload"/>
</form>
	
	
	
</body>
</html>
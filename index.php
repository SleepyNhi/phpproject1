 <?php 
    session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Project</title>
        <link rel="stylesheet" type="text/css" href="projectDesign.css">
</head>
<body>
  

    <div id="header"><h1>StoryMode</h1></div>

<div class="GameBody">
	
<div class="Start">
	
    
		<p>Enter your name:</p>

              
                <form action="login.php" method="post">
			<input type="text" name="username"><br>
			<input type="password" name="password"><br>
			<input type="submit">
          
		</form>
                         

</div>

</div>


<div id= "navigator"></div>
</body>
</html>
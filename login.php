  <?php
  session_start();
  include("charStat.php");
  
  ?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="projectDesign.css">    
    </head>
    
    <body>
      
        
        
        <div id="header"><h1>StoryMode</h1></div>
           
        <div class="GameBody">             
            <div id="characterSelection">
                <h2>Select your character</h2>
                <form action="play.php" method="post">
                    <button class="leo_whitefang" type="submit" name="charSel" value="leo"></button>
                <button class="elphelt" type="submit" name="charSel" value="elphelt"></button>
                </form>
                
            </div>
        </div>
           
           
    </body>
</html>






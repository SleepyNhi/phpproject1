<?php session_start(); 


?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="projectDesign.css">
    </head>   
    
    <body>
        <?php 
            
            $ATTACK = 30;
            $DEFENSE = 25; 
            $HEALTH = 200;
            if (isset($_SESSION['charSel'])){
                $_SESSION['Player'] = $_POST["charSel"];
            }
            else {
                $username = $_POST["username"];
            }
        ?>
        <div id="characterStats">
            <table>
                <tr>
                    <td>Username:</td>
                    <td> <?php echo $username?><?php echo $_SESSION['Player']?>
                                                      
                    </td>
                </tr>
                <tr>
                    <td>Attack:</td>
                    <td><?php echo $ATTACK?></td>
                </tr>
                <tr>
                    <td>Defense:</td>
                    <td><?php echo $DEFENSE?></td>
                </tr>
                <tr>
                    <td>Health:</td>
                    <td><?php echo $HEALTH?></td>
                </tr>
            </table>
            
            
        </div>
        
    </body>
    
  
</html>


<?php
session_start();
include("charStat.php");
include("fight.php");


//comp choice
$CPUChoice = array('Rock', 'Paper', 'Scissors');
shuffle($CPUChoice);
$CPU = $CPUChoice[0];

//characterSelection

$CPU_HEALTH = (int)240;
if($_POST["charSel"] ===leo){
    $_SESSION['Player1']= leo;
} else if($_POST["charSel"] ===elphelt){
    $_SESSION['Player1']= elphelt;
}
    
if ($_SESSION['Player1'] === leo){
    $_SESSION['Comp'] = elphelt;
} else if ($_SESSION['Player1'] === elphelt){
    $_SESSION['Comp'] = leo;
}
//    echo 'Player: '.$Player1.' <br>Comp: '.$Comp;

?>


 <html>
     <head>
        <link rel="stylesheet" type="text/css" href="projectDesign.css">
    </head>
     <body> 
         
         <div id="fight">
                 <form action="play.php" method="post">
                     <button type="submit" name="user_choice" value="Rock">Rock</button>
                     <button type="submit" name="user_choice" value="Paper">Paper</button>
                     <button type="submit" name="user_choice" value="Scissors">Scissors</button>
                   
                 </form>
        </div>
         
         <div id="dialog1">
             
         <?php 
         if(!isset($_SESSION['Health'])) {
            $_SESSION['Health'] = $HEALTH;
            $_SESSION['C_Health'] = 200;
                      

         } else {
            echo $_SESSION['Health']."&nbsp;".$_SESSION['C_Health'];           
            $user_choice = $_POST['user_choice'];
            echo '<br> You picked:'.$user_choice.'&nbsp; &nbsp;Comp:'.$CPU;
                        
         }
                
            if ($_SESSION['Health'] && $_SESSION['C_Health'] !== 0) {         
                
                if($user_choice === $CPU){
                    echo '<br>Result: Tie!';
                }
                
                else if($user_choice == "Rock"){
                    if($CPU == "Scissors") {
                        echo '<br>Result:You win';
                        $_SESSION['C_Health']= $_SESSION['C_Health'] - 15;
                       

                    } else if($CPU == "Paper"){
                        echo '<br>Result: CPU wins';
                        $_SESSION['Health'] = $_SESSION['Health'] - 30;
                       

                        }
                    }

                else if($user_choice == "Paper") {
                    if($CPU == "Rock") {
                        echo '<br>Result: You win';
                            $_SESSION['C_Health']=$_SESSION['C_Health'] - 25;
                           
                    }else {
                        if($CPU == "Scissors") {
                            echo '<br>Result: Computer wins';
                            $_SESSION['Health'] = $_SESSION['Health'] - 30;
                            
                        }
                    }
                }else if($user_choice == "Scissors") {
                    if($CPU == "Rock") {
                        echo '<br>Result: CPU wins';
                            $_SESSION['Health'] = $_SESSION['Health'] - 30;
                            
                    } else {
                        if($CPU == "Paper") {
                            echo '<br>Result: You win';
                            $_SESSION['C_Health']=$_SESSION['C_Health'] - 25;
                            
                        }
                    }
                }
               
                echo '<br>'.$_SESSION['Health'].'  '.$_SESSION['C_Health'];
                checkHealth();
            }
         
        
            
            
            function checkHealth(){
                if ($_SESSION['Health'] <= 0){
                    $_SESSION['Health']=0;
                    echo '<br>'.$_SESSION['Comp']."&nbsp;".'wins.';
                    echo " <a href=\"lost.php\">Lost</a>";
                    unset($_SESSION['Health']);
                    unset($_SESSION['C_Health']);
                    
                    }else if ($_SESSION['C_Health'] <= 0) {
                        $_SESSION['C_Health']=0;
                    echo '<br>'.$_SESSION['Player1'].'win.';
                     echo "<a href=\"win.php\">Win</a>";
                    unset($_SESSION['Health']);
                    unset($_SESSION['C_Health']);
                   
                    
                    
                }
            }
          
         ?>
         
           </div>
       
         
     </body>
 </html>


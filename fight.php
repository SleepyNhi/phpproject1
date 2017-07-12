<?php
session_start();


if ($_SESSION['Health'] == 200){
    $Red=100;
}else {
$Red = (int)(($_SESSION['Health']/$HEALTH)*100);

}


if ($_SESSION['C_Health'] == 200){
    $Blue=100;
}else {
$Blue = (int)(($_SESSION['C_Health']/200)*100);
//echo $Blue;
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="projectDesign.css">
    </head>   
    
    <body>
        
        
        <div class="GameBody">
                       
             
             <div id="player1">
                 <div id="player1_hpbar">
                    <div id="bar1" style="height:20px;width:<?php echo $Red;?>%"></div>
                </div>
                <div class="leo_whitefang"></div>
             </div>
             
             <div id="comp1">
                 <div id="comp1_hpbar">
                     <div id="bar1" style="height:20px;width:<?php echo $Blue;?>%"></div>
                 </div>
                <div class="elphelt" ></div>
               
             </div>
             
         </div>
     
    </body>
    
</html>

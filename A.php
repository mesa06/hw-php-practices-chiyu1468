<!DOCTYPE html>
<html>
<head>
<script>
    function keyChat (s) {
        debug.innerHTML += s;
    }
</script>
<style>
    div {
        font-family:Monospace;
    }
</style>
</head>

<body>

<!--1       *-->
<!--3      ***-->
<!--5     *****-->
<!--7    *******-->

<!--M = 4-->

<!--* 2n-1-->
<!--^ M-n-->
<h1> Tree <br></h1>
<div id="debug"></div>
============================================= <br>

    <?php
    
$towerLevel = 10;
$build = 0;
$countX; 

for ($build = 1; $build <= $towerLevel; $build++) {
    
    for ($countX = 0; $countX <= $towerLevel - $build; $countX++ ) {
        ?><script> keyChat("&nbsp"); </script><?php 
        // echo "&nbsp&nbsp";
    }
    for ($countX = 1; $countX <= $build *2 -1; $countX++ ) {
        ?><script> keyChat("^"); </script><?php 
        // echo "*";
    }
    ?><script> keyChat("<br>"); </script><?php 
    // echo "<br>";
}


for ($countX = 0; $countX <= $towerLevel - 1; $countX++ ) {
    ?><script> keyChat("&nbsp"); </script><?php
    
}
?><script> keyChat("||"); </script><?php


    ?>
   
   

     

 

    

    
</body>
</html>



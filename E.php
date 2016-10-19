
<?php

    if(isset($_POST["countText"])) {
        
        if($_POST["inputText"] != "") {
            $s = $_POST["inputText"];
            
            while ($s != "") {
                $c = substr($s, 0, 1);
                $s = substr($s, 1, strlen($s));
                $cArray[$c] += 1;
            }
            
            foreach ($cArray as $key => $times) {
                echo '"' . $key . '" letter : ' . $times . "time <br>";
            }
            
        }
        // echo "OK";
    }

?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="" method="post">
    <input type="text" name="inputText" id="inputText" value="" />
    <input type="submit" name="countText" value="Submit"/>
</form> 
<div id="debug">Keyin some string above...</div>
</body>
</html>



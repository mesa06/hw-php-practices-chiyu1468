<!DOCTYPE html>

<?php 

$num = array(1, 2, 3, 4, 5);
$l = sizeof($num) ;
echo "利用 ";

foreach ($num as $value) {
    echo "$value ";
}

echo "這 $l 個數字，可組出多少個數字互不相同三位數： <br><br>" ;



$x = 0;
$y = 0;
$z = 0;

for ( $x=0 ; $x <= $l-1 ; $x++ ) {
    for ( $y=0 ; $y <= $l-1 ; $y++ ) {
        if ($x != $y) {
            for ( $z=0 ; $z <= $l-1 ; $z++ ) {
                if(($z != $x)&&($z != $y)) {
                    echo "$num[$x]$num[$y]$num[$z] ";
                }
            }
        }
        // echo $x . $y;
    }
    echo "<br>";
}


?>


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    
    
    <?php
        
    ?>
    
    
</body>
</html>



<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
    
    <?php
 
    $Tri = array(0,1,8,27,64,125,216,343,512,729);
    
    for($i=1 ; $i<=9 ; $i++) {
        for($j=0 ; $j<=9 ; $j++) {
            for($k=0 ; $k<=9 ; $k++) {
                $sum = $i*100+$j*10+$k;
                if ($sum == ($Tri[$i]+$Tri[$j]+$Tri[$k])) {
                    echo $sum . "<br>";
                }
            }
        }
    }
 
    ?>
</body>
</html>


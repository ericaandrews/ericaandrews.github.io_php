<!DOCTYPE html>
<html>
<head><title>PHP Programming_Web/Forms</title></head>
<body>
    <?php
        $totalamountofloan = $_REQUEST['totalamountofloan'];
        $interestrate = $_REQUEST['interestrate'];
        $numberofmonths = $_REQUEST['numberofmonths']; 
        $x = 1+(($interestrate*0.010)/12);
        $xx = (pow($x, $numberofmonths));
        $payment = $totalamountofloan*(($interestrate*0.010)/12)*($xx/($xx-1));
        printf("%.2f",$payment);
    ?>
</body>    
</html>


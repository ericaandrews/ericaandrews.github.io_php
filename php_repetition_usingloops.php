<!DOCTYPE html>
<html>
<head><title>PHP Programming_Repetition Using Loops</title></head>
<body>
    <?php
    $size = $_REQUEST['size'];
    echo '<table style="border: 1px solid black; border-collapse: collapse;">';
    echo '<tr>';
    multiplication($size);
    echo '</table>';
    
    function multiplication($size){
        if($size <= 0){
            echo "Please enter a numeric value between 1 and 10.";
            echo "<br><br>";
        }
        else if($size > 10){
            echo "Please enter a numeric value between 1 and 10.";
            echo "<br><br>";
        }
        else if($size >= 0){
            echo '<tr>';
             for($c = 0; $c <= $size; $c++){      
              echo '<td style="border: 1px solid black; border-collapse: collapse; padding: 10px;">',$c;'<td/>';
             }                
            echo '</tr>';
            echo '<tr>';
            for($r = 1; $r <= $size; $r++){
                echo '<td style="border: 1px solid black; border-collapse: collapse; padding: 10px;">',$r;'<td/>';
                for($c = 1; $c <= $size; $c++){
                    $array[$r][$c]=$r*$c;
                    echo '<td style="border: 1px solid black; border-collapse: collapse; padding: 10px;">',$r," * ",$c, " = ",$array[$r][$c];'<td/>';
                }
                echo '</tr>';
            }
            return $array;
        }
    }    
    ?>
</body>    
</html>

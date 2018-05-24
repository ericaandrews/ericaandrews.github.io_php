<!DOCTYPE html>
<html>
<head><title>PHP Programming_Functions</title></head>
<body>
    <?php
    
    $animalName_animalSound = $_REQUEST['animal_sound'];
    $name_sound = explode(":", $animalName_animalSound);
    echo "Old MacDonald had a farm, E-I-E-I-O!<br>";
    printOneVerse($name_sound[0], $name_sound[1]);
    echo "Old MacDonald had a farm, E-I-E-I-O!<br>";
              
    function printOneVerse($animalName, $animalSound){
        echo "And on that farm he had a ", $animalName, ", E-I-E-I-O!<br>"; 
        echo "With a ", $animalSound,"-",$animalSound," here and a ", $animalSound,"-",$animalSound," there<br>";
        echo "Here a ", $animalSound, ", there a ", $animalSound, ", everywhere a ", $animalSound,"-",$animalSound,"<br>";
    } 
    
    ?>
    <br><br>
    <a href="https://hills.ccsf.edu/~eandrew6/php_functions.html">Click here to return to the original form</a><br/>
</body>    
</html>
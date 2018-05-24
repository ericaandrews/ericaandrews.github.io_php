<!DOCTYPE html>
<html>
<head><title>PHP Programming_Conditional Statements</title></head>
<body>
    <?php
     $bc = $_REQUEST['backgroundcolor'];   
     $tc = $_REQUEST['textcolor']; 

     if($bc == "black" && $tc == "black")
     {
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "blue" && $tc == "blue"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "brown" && $tc == "brown"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "green" && $tc == "green"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "orange" && $tc == "orange"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "purple" && $tc == "purple"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "red" && $tc == "red"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "white" && $tc == "white"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "yellow" && $tc == "yellow"){
     echo '<body style="background-color: white">'; 
     echo '<p style="color: black">Error: The background color and text color cannot be the same. Please select variation between background color and text color.</p>';
     echo "<br><br>";
     }
     else if($bc == "black"){
        echo '<body style="background-color: black">';
        echo "Desired background color choosen: ", $bc, "<br><br>";
        
         if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
     }
     else if($bc == "blue"){
         echo '<body style="background-color: blue">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
        
         if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "brown"){
         echo '<body style="background-color: brown">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "green"){
         echo '<body style="background-color: green">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "orange"){
         echo '<body style="background-color: orange">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "purple"){
         echo '<body style="background-color: purple">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "red"){
         echo '<body style="background-color: red">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
    else if($bc == "white"){
         echo '<body style="background-color: white">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
        if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
    }
     else if($bc == "yellow"){
         echo '<body style="background-color: yellow">';
         echo "Desired background color choosen: ", $bc, "<br><br>";
         
         if($tc == "black"){
             echo '<p style="color: black">Desired text color choosen: black</p>';
             echo "<br><br>";
        }
         else if($tc == "blue"){
             echo '<p style="color: blue">Desired text color choosen: blue</p>';
             echo "<br><br>";
        }
        else if($tc == "brown"){
             echo '<p style="color: brown">Desired text color choosen: brown</p>';
             echo "<br><br>";
        }
        else if($tc == "green"){
             echo '<p style="color: green">Desired text color choosen: green</p>';
             echo "<br><br>";
        }
         else if($tc == "orange"){
             echo '<p style="color: orange">Desired text color choosen: orange</p>';
             echo "<br><br>";
        }
         else if($tc == "purple"){
             echo '<p style="color: purple">Desired text color choosen: purple</p>';
             echo "<br><br>";
        }
        else if($tc == "red"){
             echo '<p style="color: red">Desired text color choosen: red</p>';
             echo "<br><br>";
        }
        else if($tc == "white"){
             echo '<p style="color: white">Desired text color choosen: white</p>';
             echo "<br><br>";
        }
         else if($tc == "yellow"){
             echo '<p style="color: yellow">Desired text color choosen: yellow</p>';
             echo "<br><br>";
        }  
     }
    ?>
    <a href="https://hills.ccsf.edu/~eandrew6/php_conditional_statements.html">Click here to return to the original form</a><br/>
</body>    
</html>
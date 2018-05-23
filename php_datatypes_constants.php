<!DOCTYPE html>
<html>
<head><title>PHP Programming_Data Types and Constants</title></head>
<body>
    <?php
        define ("randomString", "This is a random string.<br>");
        print randomString;

        $constString = "This is another random string.<br><br>";
        echo "Print: ", $constString;   
    
        define("randomFloat", 1.234);
        print randomFloat;
        echo ", a random float...";
    
        $constFloat = 3.21;
        echo "<br>Print another random float: ", $constFloat, "<br><br>";
    
        define("randomInteger", 5);
        print randomInteger;
        echo ", a random integer...";
    
        $constInteger = 7;
        echo "<br>Print another random integer: ", $constInteger, "<br><br>";   
        
        $name = "Erica";
        define('Intro', "Hello, hello... My name is ${name}.");
        echo Intro;   
        echo "<br>This is a random introduction.<br>";
    
        $integer = 3;
        $float = 4.56;
        $stringOne = "This is a double-quoted string.";
        $boolean = true;
        $stringTwo = 'This is a single-quoted string.';
        $variableExpansion = "$stringOne with an expansion with the integer $integer";
        
        $intvar = 2;
        $floatvar = 4.4;
        $string = "1 is the loneliest number";
        $thisvar = $intvar + (int)$string;
        $that = $floatvar - (int)$string;
        $other = $intvar * $floatvar;
        $what = "$intvar";
        
        
        print'<br>The type of the variable $integer is: '.gettype($integer);
        print'<br>The type of the variable $float is: '.gettype($float);
        print'<br>The type of the variable $stringOne is: '.gettype($stringOne);
        print'<br>The type of the variable $boolean is: '.gettype($boolean);
        print'<br>The type of the variable $stringTwo is: '.gettype($stringTwo);
        print'<br>The type of the variable $variableExpansion is: '.gettype($variableExpansion);
        print'<br>The type of the variable $intvar is: '.gettype($intvar);
        print'<br>The type of the variable $floatvar is: '.gettype($floatvar);
        print'<br>The type of the variable $string is: '.gettype($string);
        print'<br>The type of the variable $thisvar is: '.gettype($thisvar);
        print'<br>The type of the variable $that is: '.gettype($that);
        print'<br>The type of the variable $other is: '.gettype($other);
        print'<br>The type of the variable $what is: '.gettype($what);
    
        //My observations about variables: variable names should be choosen based on the subject of the assigned value; the variable name should have some relation to the assigned value to make it easy to identify if the variable is used multiple times
        //My observations about data types: since there are many different data types, keeping your data types organized can be helpful
        //My observations about data type conversion: data type conversions can be used to change a data type to another; for example, a data type with a numerical value and a data type with a string value cannot be mathematically compiled unless there is a data type conversion; if a data type needs to be changed, data type conversions could assist without having to locate a particular data type especially if the data type is used several times and amongst multiple lines of code
        //My observations about the differences between single and double quoted strings: when a single quoted string is created with a variable, the compiler displays the string with the variables data type; when a double quoted string is created with a variable, the compiler displays the string and the variables assigned value
    
        echo "<br>";
        //Additional displays of functions used in PHP
        function aFunction()
        {
            echo "<br>This is a random string.<br>";     
        }
        aFunction();
        function anotherFunction($variable)
        {
            echo "$variable is a another random string.<br>";
        }
        anotherFunction("This");
    ?>
</body>    
</html>
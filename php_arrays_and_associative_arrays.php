<!DOCTYPE html>
<html>
<head><title>PHP Programming_Arrays and Associative Arrays</title></head>
<body>
    <?php
    $ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    
    echo "Task 1:<br/>";
    echo "The capital of Netherlands is {$ceu['Netherlands']}<br/>";
    echo "The capital of Greece is {$ceu['Greece']}<br/>";
    echo "The capital of Germany is {$ceu['Germany']}<br/><br/>";
    
    echo "Task 2:<br/>";
    ksort($ceu);
    print_r($ceu);
    echo "<br/><br/>";
    
    echo "Task 3:<br/>";
    $temparray = $ceu;
    sort($temparray);
    print_r($temparray);
    //My observations of sorting an array by key: the array sorted by key displays the key index in "sorted order";
    //My observations of sorting an array by value: the array sorted by value displays the value in "sorted order" and a numerical index; 
    
    $array[1] = ["number"=>"One", 'numeric'=>1];
    $array[2] = ["number"=>"Two", 'numeric'=>2];
    $array[3] = ["number"=>"Three", 'numeric'=>3];
    $array[4] = ["number"=>"Four", 'numeric'=>4];
    $array[5] = ["number"=>"Five", 'numeric'=>5];
    $array = [$array[1], $array[2], $array[3], $array[4], $array[5]];
    
    echo "<br/><br/>Task 4:<br/>";
    print_r ($array);
    $mynewarray = [$array[3], $array[4]];
    echo "<br/><br/>";
    print_r ($mynewarray);
    //My observations of creating arrays: when creating multi-dimensional arrays, it is great practice to create a step by step process; it can become slightly confusing when adding arrays as assignments to an array;
    
    echo "<br/><br/>Task 5:<br/>";
    $ceu = array_diff($ceu,["Vilnius"]);
    print_r($ceu);
    ?>
</body>    
</html>


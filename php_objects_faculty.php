<!DOCTYPE html>
<html>
<head><title>PHP Programming_Objects</title></head>
<body>
    <?php

        $facultyID = $_REQUEST['facultyID'];
        $facultyLastName = $_REQUEST['facultyLastName'];
        $facultyFirstName = $_REQUEST['facultyFirstName'];
        $facultyMiddleName = $_REQUEST['facultyMiddleName'];
    
        $facultyLocationID = $_REQUEST['facultyLocationID'];
    
        $facultyPhone = $_REQUEST['facultyPhone'];
        $facultyRank = $_REQUEST['facultyRank'];
        $facultyPin = $_REQUEST['facultyPin'];

        class Database_Faculty{
            public $facultyID;
            public $facultyLastName;
            public $facultyFirstName;
            public $facultyMiddleName;
            public $facultyLocationID;
            public $facultyPhone;
            public $facultyRank;
            public $facultyPin;

            public function __get($newData){
                if(isset($this->facultyID)){
                    return $this->facultyID = $this->$newData;
                }
            }
            public function __set($newData, $input){
                echo '<form style="border: 1px solid #eee; width: 20%; font-family: monospace;"><br>Data entered: '.$input.'</form>';
                $this->facultyID = $this->$input;
            }
        }
    
            $fID = new Database_Faculty;
            $fID->Database_Faculty = $facultyID;
            $fLName = new Database_Faculty;
            $fLName->Database_Faculty = $facultyLastName;
            $fFName = new Database_Faculty;
            $fFName->Database_Faculty = $facultyFirstName;
            $fMName = new Database_Faculty;
            $fMName->Database_Faculty = $facultyMiddleName;
            $fLID = new Database_Faculty;
            $fLID->Database_Faculty = $facultyLocationID;
            $fPhone = new Database_Faculty;
            $fPhone->Database_Faculty = $facultyPhone;
            $fRank = new Database_Faculty;
            $fRank->Database_Faculty = $facultyRank;
            $fPin = new Database_Faculty;
            $fPin->Database_Faculty = $facultyPin;
    
    echo '<br>Enter data here to change entries: <br><br>';
    
    if(isset($_GET['source'])){
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
    }
    
function change_data(){
$data = <<<FORM
<form action="#" method="post" style="text-align: right; width: 20%; font-family: fantasy;">
		Faculty ID: <input type="text" name="facultyID"><br>
        Last Name: <input type="text" name="facultyLastName"><br>
        First Name: <input type="text" name="facultyFirstName"><br>
        Middle Name: <input type="text" name="facultyMiddleName"><br>
        Location ID: <input type="text" name="facultyLocationID"><br>
        Phone: <input type="tel" name="facultyPhone"><br>
        Rank: <input type="text" name="facultyRank"><br>
        Pin: <input type="password" name="facultyPin"><br>
        <input type="reset"> 
	    <input type="submit" value="Submit" name="submit">
	</form>	
FORM;
echo $data;	
}
    
function submit(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
    
change_data(); 
    if(submit()){
        $changeID = $_POST["facultyID"];
        $changeLastName = $_POST["facultyLastName"];
        $changeFirstName = $_POST["facultyFirstName"]; 
        $changeMiddleName = $_POST["facultyMiddleName"];
        $changeLocationID = $_POST["facultyLocationID"];
        $changePhone = $_POST["facultyPhone"];
        $changeRank = $_POST["facultyRank"];
        $changePin = $_POST["facultyPin"];
    }    
        ?>
        <br /><br />
    <a href="https://hills.ccsf.edu/~eandrew6/php_objects.html">Click here to return to the original form</a><br/>

</body>    
</html>
<!DOCTYPE html>
<html>
<head><title>PHP Programming_Objects</title>
</head>
<body>
    
    <?php
        $studentID = $_REQUEST['studentID'];
        $studentLastName = $_REQUEST['studentLastName'];
        $studentFirstName = $_REQUEST['studentFirstName'];
        $studentMiddleName = $_REQUEST['studentMiddleName'];

        $studentAddress = $_REQUEST['studentAddress'];

        $studentPhone = $_REQUEST['studentPhone'];
        $studentClass = $_REQUEST['studentClass'];
        $studentDOB = $_REQUEST['studentDOB'];
        $studentPin = $_REQUEST['studentPin'];
        $studentFacultyID = $_REQUEST['studentFacultyID'];
    
        class Database_Student{
            
            public $studentID;
            public $studentLastName;
            public $studentFirstName;
            public $studentMiddleName;

            public $studentPhone;
            public $studentClass;
            public $studentDOB;
            public $studentPin;
            public $studentFacultyID;
        
            public function __get($newData){
                if(isset($this->studentID)){
                    return $this->studentID = $this->$newData;
                }
            }
            public function __set($newData, $input){
               echo '<form style="border: 1px solid #eee; width: 20%; font-family: monospace;"><br>Data entered: '.$input.'</form>';
                $this->studentID = $this->$input;
            }
        }
 
        class Address{
            public $studentAddress;
                        
            public function __get($newData){
                if(isset($this->studentAddress)){
                    return $this->studentAddress = $this->$newData;
                }
            }
            public function __set($newData, $input){
                echo '<form style="border: 1px solid #eee; width: 20%; font-family: monospace;"><br>Data entered: '.$input.'</form>';
                $this->studentAddress = $this->$input;
            }
        }
    
            $sID = new Database_Student;
            $sID->Database_Student = $studentID;    
            $sLName = new Database_Student;
            $sLName->Database_Student = $studentLastName;    
            $sFName = new Database_Student;
            $sFName->Database_Student = $studentFirstName;
            $sMName = new Database_Student;
            $sMName->Database_Student = $studentMiddleName;
            
            $sAddress = new Address;
            $sAddress->Address = $studentAddress;

            $sPhone = new Database_Student;
            $sPhone->Database_Student = $studentPhone;
            $sClass = new Database_Student;
            $sClass->Database_Student = $studentClass;
            $sDOB = new Database_Student;
            $sDOB->Database_Student = $studentDOB;
            $sPin = new Database_Student;
            $sPin->Database_Student = $studentPin;
            $fID = new Database_Student;
            $fID->Database_Student = $studentFacultyID;
            
            echo '<br>Enter data here to change entries: <br><br>';
    
    if(isset($_GET['source'])){
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
    }
    
function change_data(){
$data = <<<FORM
<form action="#" method="post" style="text-align: right; width: 20%; font-family: fantasy;">
		Student ID: <input type="text" name="studentID"><br>
        Last Name: <input type="text" name="studentLastName"><br>
        First Name: <input type="text" name="studentFirstName"><br>
        Middle Name: <input type="text" name="studentMiddleName"><br>
        Address: <input type="text" name="studentAddress"><br>
        Phone: <input type="tel" name="studentPhone"><br>
        Class: <input type="text" name="studentClass"><br>
        Date of Birth: <input type="date" name="studentDOB"><br> 
        Pin: <input type="password" name="studentPin"><br>
        Faculty ID: <input type="text" name="studentFacultyID"><br>
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
        $changeID = $_POST["studentID"];
        $changeLastName = $_POST["studentLastName"];
        $changeFirstName = $_POST["studentFirstName"]; 
        $changeMiddleName = $_POST["studentMiddleName"];
        $changeAddress = $_POST["studentAddress"];
        $changePhone = $_POST["studentPhone"];
        $changeClass = $_POST["studentClass"];
        $changeDOB = $_POST["studentDOB"];
        $changePin = $_POST["studentPin"];
        $changeFacultyID = $_POST["studentFacultyID"];
    }    
?>
    
    <br /><br />
    <a href="https://hills.ccsf.edu/~eandrew6/php_objects.html">Click here to return to the original form</a><br/>

</body>    
</html>
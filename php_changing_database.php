<!DOCTYPE html>
<html>
<head>
    <title>PHP Programming_Changing_Database</title>
</head>
<body>
    
    <?php
        $studentLastName = $_REQUEST['studentLastName'];
        $studentFirstName = $_REQUEST['studentFirstName'];
        $studentMiddleName = $_REQUEST['studentMiddleName'];
        $studentAddress = $_REQUEST['studentAddress'];
        $studentCity = $_REQUEST['studentCity'];
        $studentState = $_REQUEST['studentState'];
        $studentZip = $_REQUEST['studentZip'];
        $studentPhone = $_REQUEST['studentPhone'];
        $studentDOB = $_REQUEST['studentDOB'];
    
        class Database_Student{
            
            public $studentLastName;
            public $studentFirstName;
            public $studentMiddleName;
            public $studentAddress;
            public $studentCity;
            public $studentState;
            public $studentZip;
            public $studentPhone;
            public $studentDOB;
            
            public function __get($newData){
                if(isset($this->studentLastName)){
                    return $this->studentLastName = $this->$newData;
                }
            }
            public function __set($newData, $input){
               echo '<form style="border: 1px solid #eee; width: 20%; font-family: monospace;"><br>Data entered: '.$input.'</form>';
                $this->studentLastName = $this->$input;
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
            $sLName = new Database_Student;
            $sLName->Database_Student = $studentLastName;    
            $sFName = new Database_Student;
            $sFName->Database_Student = $studentFirstName;
            $sMName = new Database_Student;
            $sMName->Database_Student = $studentMiddleName;
            
            $sAddress = new Address;
            $sAddress->Address = $studentAddress;
            $sCity = new Database_Student;
            $sCity->Database_Student = $studentCity;
            $sState = new Database_Student;
            $sState->Database_Student = $studentState;
            $sZip = new Database_Student;
            $sZip->Database_Student = $studentZip;
            $sPhone = new Database_Student;
            $sPhone->Database_Student = $studentPhone;
            $sDOB = new Database_Student;
            $sDOB->Database_Student = $studentDOB;      
    
            echo '<br>Enter data here to change entries: <br><br>';
    
    if(isset($_GET['source'])){
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
    }
    
function change_data(){
$data = <<<FORM
<form action="#" method="post" style="text-align: right; width: 20%; font-family: fantasy;">
        Last Name: <input type="text" name="studentLastName" pattern="[A-Za-z\s_'-]{0,}" required><br>
        First Name: <input type="text" name="studentFirstName" pattern="[A-Za-z\s_'-]{0,}" required><br>
        Middle Name: <input type="text" name="studentMiddleName" pattern="[A-Za-z]{1,1}" required><br>
        Address: <input type="text" name="studentAddress" pattern="[A-Za-z0-9\s._-]{0,}" required><br>
        City: <input type="text" name="studentCity" pattern="[A-Za-z\s._-]{0,}" required><br>
        State: <select name="studentState" required><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option>
        <option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option>
        <option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option>
        <option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option>
        <option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option>
        <option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option>
        <option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option>
        <option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option>
        <option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wycoming">Wycoming</option>
        </select><br>
        Zip: <input type="text" name="studentZip" pattern="[0-9]{5,5}" required><br>
        Phone: <input type="text" name="studentPhone" pattern="\([0-9]{3,3}\)+\s[0-9]{3,3}-[0-9]{4,4}" placeholder="(999) 999-9999" required><br>
        Date of Birth: <input type="text" name="studentDOB" pattern="[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}" placeholder="YYYY-MM-DD" required><br> 
        <input type="reset"> 
	    <input type="submit" value="Submit" name="submit">
</form>	
FORM;
echo $data;	
}
    
$random_sid = rand(10000,99999);    
$random_spin = rand(1000,9999);
$random_fid = rand(1000,9999);
    
print "<table cellpadding='5'; style='border: 1px solid; border-collapse: collapse; text-align: center;'>";
print "<th style='border: 1px solid; border-collapse: collapse;'>"; 
echo "Field";
print "</th>";    
print "<th style='border: 1px solid; border-collapse: collapse;'>"; 
echo "Auto Data";
print "</th>";    
print "<tr style='border: 1px solid; border-collapse: collapse;'>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo "Student ID"; 
print "</td>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo ($random_sid . "<br>"); 
print "</td>";    
print "</tr>";
print "<tr style='border: 1px solid; border-collapse: collapse;'>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo "Student Class"; 
print "</td>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo "FR <br>"; 
print "</td>";    
print "</tr>";    
print "<tr style='border: 1px solid; border-collapse: collapse;'>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo "Student Pin"; 
print "</td>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo ($random_spin . "<br>"); 
print "</td>";    
print "</tr>";
print "<tr style='border: 1px solid; border-collapse: collapse;'>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo "Faculty ID"; 
print "</td>";
print "<td style='border: 1px solid; border-collapse: collapse;'>";    
echo ($random_fid . "<br>"); 
print "</td>";    
print "</tr>";
print "</table><br><br>";    
    
function submit(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
    
change_data(); 
    if(submit()){
        $changeLastName = $_POST["studentLastName"];
        $changeFirstName = $_POST["studentFirstName"]; 
        $changeMiddleName = $_POST["studentMiddleName"];
        $changeAddress = $_POST["studentAddress"];
        $changeCity = $_POST["studentCity"];
        $changeState = $_POST["studentState"];
        $changeZip = $_POST["studentZip"];
        $changePhone = $_POST["studentPhone"];
        $changeDOB = $_POST["studentDOB"];
    }    
?>
</body>    
</html>

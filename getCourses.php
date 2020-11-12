<?php 
$dbhost_name = "localhost"; 
$database = "acp";       
$username = "root";      
$password = "";   
$db = new mysqli($dbhost_name, $username, $password, $database); 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

if(isset($_POST['year']) && isset($_POST['semester'])){
    $year = $_POST['year'];
    $semester = $_POST['semester'];    
    $query = "select name from courses where year=" .$year. " and semester=" .$semester;
    $result = $db->query($query);
    while($row = $result->fetch_assoc()){
        echo "<option value='".$row["name"]."'>".$row['name']."</option>"; 
    }
}
?>    

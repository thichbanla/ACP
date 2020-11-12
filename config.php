<?Php
$dbhost_name = "localhost"; 
$database = "acp";       
$username = "root";      
$password = "";          

$db = new mysqli($dbhost_name, $username, $password, $database);
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?> 
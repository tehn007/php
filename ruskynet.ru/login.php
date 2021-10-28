<?
$response = array();
require_once __DIR__ . '/db_config.php';
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($mysqli->connect_errno) {
    printf("Error: %s\n", $mysqli->connect_error);
        exit();
        }
if (isset($_POST['name']))        
$name = $_POST['name'];
    $select = "SELECT * FROM people WHERE name = $name" ;
        if ($result = $mysqli->query($select)) {
                    while ($row = $result->fetch_assoc()) {
		        $chel = array();
	            $chel["id"] = $row['id'];
	            $chel["name"] = $row['name'];
	            $chel["nic"] = $row['nic'];
	            $chel["description"] = $row['description'];
	            $chel["phone"] = $row['phone'];
	            $chel["updated"] = $row['updated'];
	            $passwd = $row['passwd'];	            
	            }
//***proverka parolya***
			//if (password_verify($_POST['passwd'], $chel["passwd"])) 
			if ($_POST['passwd'] == $passwd)
			{
        	        $response["success"] = 1;
        	 //       $response["chel"] = array();
        	 //       array_push($response["chel"], $chel);
        	        // echoing JSON response
        	        echo json_encode($response);
			} else
			{
        		$response["success"] = 0;
			$response["message"] = "Neverniy parol";
    	            // echo no users JSON
			echo json_encode($response);
            }
//*** ***       
}
else {
      print_r("!ZAPROS");
}              
$result->close();
$mysqli->close();
?>
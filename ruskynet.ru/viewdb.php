<?
$response = array();
require_once __DIR__ . '/db_config.php';
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($mysqli->connect_errno) {
    printf("Error: %s\n", $mysqli->connect_error);
        exit();
                            }
    
       if ($result = $mysqli->query("SELECT * FROM people where id=1")) {
        //    printf("Select аВаЕбаНбаЛ %d бббаОаК.\n", $result->num_rows);
if (isset($_POST['id'])) {
    $id = $_POST['id'];
///***///
//if (!empty($result)) {
        // check for empty result
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                        //        printf("%s\nTEST:", $row[1]);
        $chel = array();
                $chel["id"] = $row['id'];
                $chel["name"] = $row['name'];
                $chel["nic"] = $row['nic'];
                $chel["description"] = $row['description'];
                $chel["phone"] = $row['phone'];
                $chel["updated"] = $row['updated'];
                }
                // success
                $response["success"] = 1;
                // user node
                $response["chel"] = array();
                array_push($response["chel"], $chel);
                // echoing JSON response
                echo json_encode($response);
                } else {
                // no men found
                $response["success"] = 0;
                $response["message"] = "No chel found";
                // echo no users JSON
	        echo json_encode($response);
                }
}                
//print_r("Peremennaya id= ".$id);
$result->close();
$mysqli->close();
}

?>
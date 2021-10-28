<?
class TEST{
 function __construct(){
 $this->connect();
 
 echo ("created");
 }
 
 
 function connect() {
 require_once __DIR__ .'/db_config.php';
//  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE);
//  $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
// returing connection cursor
//return $con;
}

}




$t = new TEST();

?>
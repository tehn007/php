<?
class DB_CONNECT {
    function __construct() {
        $this->connect();
    }
    function __destruct() {
        // closing db connection
        $this->close();
    }
    function connect() {
        require_once __DIR__ . '/db_config.php';
        // Connecting to mysql database
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        // Selecing database
//        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
                print_r(" connect");
        return $con;
    }
    function close() {
        // closing db connection
        mysqli_close();
    }
}
$test = new DB_CONNECT;
?>

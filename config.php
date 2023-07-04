<?php 

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


/*
define('TBL',"");
define('DB',"dth");
class Dbcon extends mysql 
{
    protected $servername = "localhost";
    protected $username = "dth";
    protected $password = "cFCe9hLxWb28JMPA";
    protected $dbname = "dth";
    function __construct()
    {
        parent::__construct($this->servername, $this->username, $this->password, $this->dbname);
        if (mysql_connect_error()) 
        {
            die('Connect Error (' . mysql_connect_errno() . ')'. mysql_connect_error());
        }
    }
}

$conn = new Dbcon;

$home_path="https://dth.ac.in/medical/admin/admin-template/";

*

/*
define("host","localhost");
define("user","dth");
define('password',"cFCe9hLxWb28JMPA");
define('dbname','dth');
$conn = mysql_connect(host,user,password);
mysql_query("SET NAMES UTF8");
mysql_select_db(dbname,$conn);
*/


//$link = mysql_connect('localhost', 'dth', 'cFCe9hLxWb28JMPA');
$conn = new mysqli("localhost","dth","swayamdth","dth");
if ($conn -> connect_errno) {
    echo 'Could not connect: ' . $conn -> connect_errno();
}
//mysql_select_db("dth",$link);


$home_path="https://dth.ac.in/medical/admin/admin-template/";

?>
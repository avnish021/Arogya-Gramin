<?php
//DATABASE DETAILS
define("DB_HOST", "localhost");
define("DB_USER", "arogyagr_arogyagramin");
define("DB_PASS", "arogyagramin123");
define("DB_NAME", "arogyagr_arogyagramin");
//MYSQL CONNECTION
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    echo "connection faild" . " " . mysqli_connect_error();
    exit();
}
$object = new Database();
if($object->Select("web_info","*",null,null,null,"1")){
 foreach($object->getResult() as list('WEB_NAME'=>$WEB_NAME,'AUTHOR'=>$AUTHOR,'URL'=>$URL,"WEB_MAIL"=>$WEBMAIL,"CONTACT_NO"=>$CONTACT_NO
 ,"ADDRESS"=>$ADDRESS,"FB_URL"=>$FB_URL,"INSTA_URL"=>$INSTA_URL,"TWITTER_URL"=>$TWITTER_URL,"GITHUB_URL"=>$GITHUB_URL,"YT_URL"=>$YT_URL,"LINKEDIN"=>
 $LINKEDIN,"LOGO_URL"=>$LOGO_URL,"TITLE"=>$TITLE,"FAVICON_ICON"=>$FAVICON_ICON)){
  
 }
}else{
print_r($object->getResult()) ;
}
//TIMEZONE
date_default_timezone_set("Asia/Calcutta");
//CONSTANT VARIABLES
//WEB VARIABLES
define("WEBNAME", $WEB_NAME);
define("AUTHOR", $AUTHOR);
define("FAVICON_ICON", $FAVICON_ICON);
define("TITLE", $TITLE);
define("URL", $URL);
define("WEB_MAIL", $WEBMAIL);
define("CONTACT_NO", $CONTACT_NO);
define("ADDRESS", $ADDRESS);
//SOCIAL MEDIA
define("FB_URL", $FB_URL);
define("INSTA_URL", $INSTA_URL);
define("TWITTER_URL", $TWITTER_URL);
define("GITHUB_URL", $GITHUB_URL);
define("YT_URL", $YT_URL);
define("LINKEDIN", $LINKEDIN);
//LOGO URL
define("LOGO_URL", $LOGO_URL);
//DATE AND TIME FUNCTION
define("DATE", date('d-m-Y'));
define("TIME", date('H:i:s'));
//MYSQLI OBJECT CLASS
#PLEASE DON'T EDIT IT
class Database
{
//DATABASE DETAILS, CONNECTION & RESULT PROPERTIES
    private $db_host = DB_HOST;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $db_name = DB_NAME;
    private $mysqli = "";
    private $con = false;
    public $result = array();
//DATABASE CONNECTION USING CONSTRUCT MAGIC METHOD
    public function __construct()
    {
        if (!$this->con) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }
//MYSQL INSERT METHOD
    public function Insert($table, $parameter = array())
    {
        if ($this->CheckTable($table)) {

            $table_column = implode(',', array_keys($parameter));
            $table_value = implode("','", $parameter);
            $sql = "INSERT INTO $table ($table_column) VALUES ('$table_value')";

            if ($this->mysqli->query($sql)) {

                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {

                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
    }
//MYSQL UPDATE METHOD
    public function Update($table, $parameter = array(), $where = null)
    {
        if ($this->CheckTable($table)) {
            $arguments = array();
            foreach ($parameter as $key => $value) {
                $argument[] = "$key ='$value'";
            }
            $sql = "UPDATE $table SET " . implode(', ', $argument);

            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {

                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
    }
//MYSQL DELETE METHOD
    public function Delete($table, $where = null)
    {
        if ($this->CheckTable($table)) {
            $sql = "DELETE FROM $table";
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->deleted_rows);
                return true;
            } else {

                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
    }
//MYSQL SELECT METHOD
    public function Select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null)
    {
        global $numrows;
        if ($this->CheckTable($table)) {
            $sql = "SELECT $rows FROM $table";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($order != null) {
                $sql .= " ORDER BY $order";
            }
            if ($limit != null) {
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $sql .= " LIMIT $start,$limit";
            }

            $query = $this->mysqli->query($sql);
            if ($query) {

                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
                $numrows = $query->num_rows;
            } else {
                array_push($this->result, $this->mysqli->error);
            }
        } else {
            return false;
        }
    }
//MYSQL PAGINATION METHOD
    public function Pagination($table, $join = null, $where = null, $limit = null)
    {
        if ($this->CheckTable($table)) {
            if ($limit != null) {

                $sql = "SELECT COUNT(*) FROM $table";

                if ($join != null) {
                    $sql .= " JOIN $join";
                }
                if ($where != null) {
                    $sql .= " WHERE $where";
                }

                $query = $this->mysqli->query($sql);

                $total_record = $query->fetch_array();
                print_r($query->fetch_array());
                $total_record = $total_record[0];
                $total_page = ceil($total_record / $limit);

                $url = basename($_SERVER['PHP_SELF']);


                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }

                $output = "<ul class='pagination'>";
                if ($page > 1) {
                    $output .= "<li><a href='$url?page=" . ($page - 1) . "'>Prev</a></li>";
                }
                if ($total_record > $limit) {
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            $cls = "class='active'";
                        } else {
                            $cls = "";
                        }
                        $output .= "<li><a href='$url?page=$i'>$i</a></li>";
                    }
                }
                if ($total_page > $page) {
                    $output .= "<li><a href='$url?page=" . ($page + 1) . "'>Next</a></li>";
                }
                $output .= "</ul>";
                echo $output;
            } else {
                return false;
            }
        }
    }
//MYSQL MANNUAL SQL METHOD
    public function sql($sql)
    {
        $query = $this->mysqli->query($sql);
        if ($query->num_rows > 0) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }
    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    //MYSQL CHECKING FOR EXISTION TABLE IN DATABASE
     function CheckTable($table)
    {
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . " does not exist in database");
                return false;
            }
        }
    }
// GET MAGIC METHOD USED FOR CHECKING IF USER ACCESS PRIVATE PROPERTIES
    public function __get($property)
    {

        echo "<div class='alert alert-danger'><strong><center>You are trying to access non exist or private property $property</center></strong></div>";
    }
// SET MAGIC METHOD USED FOR CHECKING IF USER WANT TO SET VALUE OF PRIVATE PROPERTIES
    public function __set($property, $value)
    {

        echo "<div class='alert alert-danger'><strong><center>You are trying to set value of non exist or private variable </center></strong></div>";
    }
// SEND MAIL TO USER USING PHPMAILER 
    public function SendMail($eml, $mailsubject, $msg, $url)
    {
        $to = $eml;
        $subject = $mailsubject;
        $message = $msg

            . $url;


        $headers = 'From: Service@arogyagramin.com' . "\r\n" .
            'Reply-To: info@arogyagramin.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        return true;
    }
//MYSQL CONNECTION CLOSE USING DESTRUCT MAGIC METHOD
    public function __destruct()
    {
        if ($this->con) {
            if ($this->mysqli->close()) {
                $this->con = false;
                return true;
            }
        } else {
            return false;
        }
    }
}


function RandomCode()
{
  $con = mysqli_connect("localhost", "arogyagr_arogyagramin", "arogyagramin123", "arogyagr_arogyagramin");
  $mysqliquery = mysqli_query($con, "SELECT * FROM v_transaction ORDER BY ID DESC LIMIT 1");
  if (mysqli_num_rows($mysqliquery) > 0) {
    $row = mysqli_fetch_assoc($mysqliquery);
    $maxid = $row['ID'];
    $int = (int) filter_var($maxid, FILTER_SANITIZE_NUMBER_INT);
    $int = $int + 1;
    $stid = 'ARG00000'.$int;

    return $stid;
  }else{
   return 'ARG00000';   
  }
}

function RandomAppNo()
{
  $con = mysqli_connect("localhost", "arogyagr_arogyagramin", "arogyagramin123", "arogyagr_arogyagramin");
  $mysqliquery = mysqli_query($con, "SELECT * FROM crad_details ORDER BY ID DESC LIMIT 1");
  if (mysqli_num_rows($mysqliquery) > 0) {
    $row = mysqli_fetch_assoc($mysqliquery);
    $maxid = $row['ID'];
    $int = (int) filter_var($maxid, FILTER_SANITIZE_NUMBER_INT);
    $int = $int + 1;
    $stid = 'ARG00000'.$int;

    return $stid;
  }else{
   return 'ARG00000';   
  }
}
?>
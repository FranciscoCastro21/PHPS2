
 
 <?php

class Database{
    private $connection;
    function __construct()
    {
        $this-> connecr_db();
    }
    public function connecr_db(){
        $this -> connection = mysqli_connect("localhost", "root", "", "schedulecalculatation"); 
        if (mysqli_connect_errno()){
            die("Database connection failed". mysqli_connect_error());
        }
    }
public function create($wid, $fname, $lname, $datew, $timew){


    $sql = " INSERT INTO schedulecalc(wid,fname,lname,datew,timew) 
    VALUE ('$wid', '$fname', '$lname', '$datew', '$timew')";
    $res = mysqli_query($this-> connection, $sql);
    if ($res){
        return true;
    }
    else{
        return false;
    }
}
public function read(){
    $sql = "SELECT * FROM schedulecalc";
     $res = mysqli_query($this->connection, $sql);
     return $res;
}}
$database = new Database();
    ?>
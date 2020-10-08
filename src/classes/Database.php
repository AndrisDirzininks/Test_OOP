<?php
//class for database connection
class Database
{
    // assign values to varaiables for database connection
    private $host = 'localhost';
    private $user = 'root';
    private $pass = "";
    private $dbname = "scandiweb_uzd";
    // decleare variables for methods
    private $dbh;
    private $stmt;
    private $error;

    // this method (connect the database) will run automatically when the class is instantiated
    public function __construct()
    {
        // set DSN
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        // set an attribute on the database handle
        $options = array(
            // to see what are the errors
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        );
        // Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        catch(PDOException $e) {
            $this->error=$e->getMessage();
            echo $this->error;
        }
    }
    // Mathods
    // Prepare statement with query
    public function query($sql)
    {
        $this->stmt=$this->dbh->prepare($sql);
    }
    // Bind values
    public function bind($param, $value, $type = null)
    {
        // check and set the value type
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }
    // Get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // Get single record
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
               
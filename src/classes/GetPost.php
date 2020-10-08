<?php 
// class to get all data from database
class GetPost extends Database
{
    public $db;
    public $results;
    // the method runs as the class is instantiated
    public function __construct()
    {
        // create an instance from class that connects to the database and handles other methods
        $this->db = new Database;
        // query method for the database
        $this->db->query("SELECT * FROM products");
        $this->results = $this->db->resultSet();
    }
}

<?php
// class to check form submitted values and prepare to delete particular rows from database
class MassDelete 
{
    private $masivs;
    private $db;
    // method to delete a row with particular id
    public function deletePost($id)
    {
        // query method for the database
        $this->db->query("DELETE FROM products WHERE id= :id");
        //Bind values
        $this->db->bind(":id", $id);            
        $this->db->execute();
    }  
    // run a function when instantiating the class
    public function __construct()
    {
        $this->db = new Database;
        // check if some checkboxes are selected for deleting (they must be now in array from form)
        if (isset($_POST["arr"])) {
            // set a property value from form array with checkbox values.
            $this->masivs=$_POST["arr"];
            // check if the form is submited with Delete option
            if (isset($_POST["submit"])&&$_POST["select"]=="Delete") {
                // loop through array elements
                for ($i=0; $i<count($this->masivs); $i++) {
                    // run a method with query (deceleared in GetPost class) to delete a database row with particular id
                    $this->deletePost($this->masivs[$i]);
                    // reload page when the loop is to the end
                    if ($i<count($this->masivs)) {
                    echo "<meta http-equiv='refresh' content='0'>";
                    }
                };
            }
        }
    }
}

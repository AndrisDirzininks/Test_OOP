<?php 
// class to add data to database
class AddDvd extends CheckSku
{
    public $db;
    private $data;
    // run a method when instantiating the class
    public function __construct()
    {
        // create an instance from class that connects to the database and handles other methods
        $this->db = new Database;
        // check if the sku is unique - run a method from extended class
        if ($this->findRowBySku($_POST["Sku"]) == false) {
            // assign submitted form values to a varable
            $this->data=$_POST;
            // run a query for the database to insert a new row
            $this->db->query("INSERT INTO products (sku, name, price, size, weight, height, width, length)
            VALUES(:sku, :name, :price, :size, :weight, :height, :width, :length)");
            // bind values
            $this->db->bind(":sku", $this->data["Sku"]);
            $this->db->bind(":name", $this->data["Name"]);
            $this->db->bind(":price", $this->data["Price"]);
            $this->db->bind(":size", $this->data["Size"]);
            // values that are not in the particular submitted form are set to NULL          
            $this->db->bind(":weight", NULL);
            $this->db->bind(":height", NULL);
            $this->db->bind(":width", NULL);
            $this->db->bind(":length", NULL);
                
            $this->db->execute();
            // redirect to product lists
            echo '<script>location.href="http://localhost/mans_scandiweb/public"</script>';
        } else {    // if this sku is not unique, then output warning message
            echo "<p class=". "text-danger" .">Item with SKU - ".$_POST["Sku"]." 
            already exists. Please add other product.</p>"; }
    }
}

<?php 
// class to check if the sku is unique
class CheckSku
{
    //  method with a query to check in't in the database already such a sku value
    public function findRowBySku($sku){
        $this->db->query("SELECT * FROM products WHERE sku = :sku");
        $this->db->bind(":sku", $sku);
        // run a method to get single record
        $row=$this->db->single();
        // Check if there is a record now and return a value
        if ($this->db->rowCount()>0) {
            return true;
        } else {
            return false;
        }
    }
}

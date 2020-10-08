<?php
//  create objects from classes according of the type from the form
class TypeCaseFactory
{
    // run a method when instantiating the class
    public function __construct(){
        // first check is the form submitted 
        if (isset($_POST["submit"])) {
            // according to the selected type create an object with propper queries for database 
            switch ($_POST["select"]) {
                case "Size":
                   return new AddDvd();
                case "Weight": 
                    return new AddBook();
                case "Dimensions":
                    return new AddFurniture();  
            }
        }
    }
}
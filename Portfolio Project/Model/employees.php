<?php
include_once('database.php');

class Employee{
    private $id;
    private $first_name;
    private $last_name;
    
    public function __construct($id, $first_name, $last_name) {
        $this->id = $id;
        $this->firstName = $first_name;
        $this->lastName = $last_name;
    }
    public function getID(){
        return $this->id;
    }
    public function setID($value){
        $this->id = $value;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setFirstName($value){
        $this->firstName = $value;
    }
    public function setLastName($value){
        $this->lastName = $value;
    }
}


class EmployeeDB{
    public static function getEmployees(){
        $db = Database::getDB();
        $query = 'Select * from employee order by employeeID';
        $statement = $db->prepare($query);
        $statement-> execute();
//        $statement->closeCursor();
        $employee = array();
        foreach($statement as $row){
            $employee = new Employee($row['employeeID'],
                                     $row['firstName'],
                                     $row['lastName']);
            $employees[] = $employee;
            
        }
        return $employees;
        
        
        
        
    }
}




?>
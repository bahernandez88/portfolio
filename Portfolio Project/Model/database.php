<?php
//*****************************************************************************
//  Date            Name                                Description
//  ---------------------------------------------------------------------------
//  9/13/2019   Brian A. Hernandez      created addComment and deleteVisitor 
//                                      as functions.
//
//
//
//
//*****************************************************************************
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=oceansidedb';
    private static $username = 'root';
    private static $password = 'Pa$$w0rd';
    private static $db;

    public function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
//                $error_message = $e->getMessage();
//                include('../errors/database_error.php');
                echo "error";
                exit();
            }
        }
        return self::$db;
    }
    
      
    public static function addComment($reason, $first, $last, $email, $phone, $comment){
        //create db object
        $db = Database::getDB();
        
        //query for sql
        $query = 'INSERT INTO oceanside_contact
                     (contactReason, visitorFirst, visitorLast, visitorEmail, visitorPhone, comment)
                  VALUES
                     (:reason, :first, :last, :email, :phone, :comment)';
        $statement = $db->prepare($query);
        $statement->bindValue(':reason', $reason);
        $statement->bindValue(':first', $first);
        $statement->bindValue(':last', $last);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':comment', $comment);
        $statement->execute();
        $statement->closeCursor();

        //include('../thankyou.php');
    }
    public function deleteComment($id){
        //create db object
        $db = Database::getDB();
        
        //query for sql
        $query = "DELETE FROM oceanside_contact WHERE visitorID = :visitorID";
        $statement = $db->prepare($query);
        $statement->bindValue(':visitorID', $id);
        $statement->execute();
        $statement->closeCursor();

        }
    
}
?>


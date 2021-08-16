<?php
require_once "connection.php";
/**
*Produc class
*/
class ProductsModel{
    /**
     * product model method
     * GET product from backend
     */
    static public function mdlShowProduct($table,$item,$value){
        if($item != null){
            $stmt = Connection::Connect()->prepare("SELECT * FROM $table WHERE $item =:$item");
            $stmt->bindParam(":".$item,$value);
            $stmt->execute();
            return $stmt->fetch();
        }else{
   $stmt = Connection::Connect()->prepare("SELECT * FROM $table ORDER BY 1 DESC");
   $stmt-> execute();
 	return $stmt ->fetchAll();
        }
    }
    /**
     * @Method3
     * Addnew User
     * 
     */

     static public function mdlAddNewUser($table, $data){
         $stmt=Connection::Connect()->prepare("INSERT INTO $table (fname,lname,sname,year) VALUES(:fname,:lname,:sname,:year)");

         $stmt->bindParam(":fname",$data['fname']);
         $stmt->bindParam(":lname",$data['lname']);
         $stmt->bindParam(":sname",$data['sname']);
         $stmt->bindParam(":year",$data['year']);
 if($stmt->execute()){
     return "ok";
 }else{
     return "error";
 }
     }
}
?>
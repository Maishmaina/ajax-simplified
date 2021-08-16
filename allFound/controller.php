<?php 
/***
 * PTODUCT CONTROLLER
 * 
 */
class ProductController{
    /**
     * @Method1
     * get all products
     */
    static public function ctrShowProduct($item,$value){
        $table="products";
        $response=ProductsModel::mdlShowProduct($table,$item,$value);
        return $response;
    }


/**
 * @Method2
 * add New User
 */

 static public function ctrAddNewUser(){
     if(isset($_POST["submit"])){
         $table="contact";
         $data= [
        "fname"=>$_POST['fname'],
         "lname"=>$_POST["lname"],
         "sname"=>$_POST["sname"],
         "year"=>$_POST["year"]];

$response = ProductsModel::mdlAddNewUser($table,$data);
if($response= "ok"){
    echo "<script>alert('Data Added Successfilly')</script>";
}else{
    echo "<script>alert('Data Error')</script>";
}

     }
 }
}
?>
<?php 
require_once "controller.php";
require_once "model.php";

class AjaxProduct{

    public $productId;
/**
 * @Method
 * Get single product
 */
public function ajxUpdateproduct(){
    $item="id";
    $value= $this->productId;
    $response=$product=ProductController::ctrShowProduct($item,$value);
    echo json_encode($response);

}
}
/** Create Instant of the class */
if(isset($_POST["productId"])){
    $action=new AjaxProduct();
    $action->productId=$_POST["productId"];
    $action->ajxUpdateproduct();
}
?>
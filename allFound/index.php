<?php 
require_once "controller.php" ;
require_once "model.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplified Found it All Here</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<div id="target" class="container"> this is the data

<button id="action">action</button>
<p class="add">this data has been used to study behavor of jquery </p>

<form>
<input type="text" name="data" class="input-type" id="data-focus"/>
</form></br>
<button id="action1">Triger</button>
<p class="fadeData"> this is the data to fade</p>

<button id="action3">slide</button>
<p class="fadeslide"> this is the data to slide</p>
<button id="action4">slideToggle</button>
<p class="fadeToggle"> this is the data to slide Toggle</p>

<button id="action5">Animate</button>
<p class="animateData"> this is the data to Animate</p>

<button id="action6">CallBack</button>
<p class="classBack"> this is the data to CallBack</p>

<button id="action7">Chaining</button>
<p class="chainig"> this is the data to Chainign</p>
<p class="update"> Fill the Form Below</p>
<form method="POST" enctype="multipart/form-data">
<input type="text" name="fname" placeholder="First Name" /><br/>
<input type="text" name="lname"  placeholder="Last Name"/><br/>
<input type="text" name="sname" placeholder="Sir Name" /><br/>
<input type="niumber" min="0" name="year" required placeholder="Years"/><br/>
<input type="submit" value="Submit" name="submit"/>
</form>
<?php 
$newUser=new ProductController();
$newUser->ctrAddNewUser()
?>
<?php
$item=null;
$value=null;
// $product= new ProductController();
// $product-> ctrShowProduct($item,$value);
$product=ProductController::ctrShowProduct($item,$value);
//var_dump($product);
// foreach($product as $key => $value){
//     echo "<p> ".$value["description"]."</p><br/><p>".$value["stock"]."</p>";


// }


?>


<table class="table table-bordered table-hover table-striped table-responsive">
<thead>
<tr>
<th>description</th>
<th>stock</th>
<th>buying_price</th>
<th>selling_price</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach($product as $key => $value){
?>
<tr>
<td><?php echo $value["description"];?></td>
<td id="stock"><?php echo $value["stock"];?></td>
<td><?php echo $value["buying_price"];?></td>
<td><?php echo $value["selling_price"];?></td>
<td><button  type="button" class="btn btn-primary btnAction"  productId='<?php echo $value["id"];?>' stock='<?php echo $value["stock"]+1;?>'>ajax</button></td>
</tr>
<?php
}

?>
</div>
</tbody>
</table>

   <script src="js.js"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP simplified</title>
</head>
<body>
   <?php
   if (isset($_GET["root"])) {
    if($_GET["root"]=="home"|| $_GET["root"]=="simplified"){
        include "modules/".$_GET["root"].".php"
    }else{
        include "modules/404.php"
    }
   }
   include "module/footer.php"
   ?> 
   <script src="views/js/template"></script>
</body>
</html>
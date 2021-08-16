<?php
class Connection{
    static public function Connect(){
        $link= new PDO("mysql:host=localhost; dbname=pos_dev","root","");
        $link->exec("set name utf8");

        return $link;
    }
}
?>
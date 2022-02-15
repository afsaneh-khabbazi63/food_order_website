
<?php
function connectDB(){
    $host="localhost";
    $db="hana_db";
    $username="root";
    $password="";

    try
    {

        $connect=new PDO("mysql:host=$host;dbname=$db",$username,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

    catch(PDOException $error)
    {
        return $error->getMessage();
    }

}

//$connect->query("set character set utf8");
//
//$result2=$connect->query("select * from cat");
//
//foreach($result2 as $cat)
//{
//    echo $cat['id'].'  '.$cat['name'].'          ';
//}

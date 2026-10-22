<?php


$server_name = "db.fr-roub1.bengt.wasmernet.com";            
$database_name = "student_registration_system"; 
$database_username = "user_dce5446b";            
$database_password = "pw_V8jZl8FHOjHDBIl79ktLzVZcu0MuP71I";            
try {
    $connection = new PDO("mysql:host=$server_name;dbname=$database_name", $database_username, $database_password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 

 catch (PDOException $error)
  {
    echo "عذراً، فشل الاتصال بقاعدة البيانات: " . $error->getMessage();
  }

?>

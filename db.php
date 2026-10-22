<?php


$server_name = "db.fr-roub1.bengt.wasmernet.com";            
$database_name = "student_registration_system"; 
$database_username = "user_46e567de";            
$database_password = "pw_T465tSD1agqULM3UHiFMatrAJyUeBAS8";            
try {
    $connection = new PDO("mysql:host=$server_name;dbname=$database_name", $database_username, $database_password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 

 catch (PDOException $error)
  {
    echo "عذراً، فشل الاتصال بقاعدة البيانات: " . $error->getMessage();
  }

?>

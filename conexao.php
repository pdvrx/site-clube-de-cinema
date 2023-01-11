<?php

$pdo = new PDO("mysql:dbname=freedb_clbcnm;host=sql.freedb.tech","freedb_pedrocinema","ty5%rSqJX@&HGTM");

try{
    $pdo = new PDO("mysql:dbname=freedb_clbcnm;host=sql.freedb.tech","freedb_pedrocinema","ty5%rSqJX@&HGTM");
} 
catch(PDOException $e){
    echo "erro bd: " . $e->getMessage();
}

catch(Exception $e){
    echo "erro generico: " . $e->getMessage();
}

?>
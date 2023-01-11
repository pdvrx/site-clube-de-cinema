<?php

$pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");

try{
    $pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");
} 
catch(PDOException $e){
    echo "erro bd: " . $e->getMessage();
}

catch(Exception $e){
    echo "erro generico: " . $e->getMessage();
}

?>
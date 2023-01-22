<?php
ob_start();
$pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");
try{
    $pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");} 
catch(PDOException $e){
    echo "erro bd: " . $e->getMessage();
}

catch(Exception $e){
    echo "erro generico: " . $e->getMessage();
}

$numero = $_POST['numero'];

$pdo->query("INSERT INTO numeros (numero) VALUES ('$numero')");

if($pdo){
    echo "foi";
    header('Location: index.php');
    ob_end_flush();
} else{
    echo "n foi";
}

?>
<?php

$pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");
try{
    $pdo = new PDO("mysql:dbname=id20135716_clbcnm;host=localhost","id20135716_pedro","XU\=2-sxyu(v[{?_");} 
catch(PDOException $e){
    echo "erro bd: " . $e->getMessage();
}

catch(Exception $e){
    echo "erro generico: " . $e->getMessage();
}

$res = $pdo->query("DELETE FROM emails WHERE corpoEmail IS NOT NULL");

$corpoEmail = $_POST['corpoEmail'];

$pdo->query("INSERT INTO emails (corpoEmail) VALUES ('$corpoEmail')");

if($pdo){
    echo "foi";
    header('Location: index.php');
    ob_end_flush();
} else{
    echo "n foi";
}


$cmd = $pdo->prepare("SELECT email,corpoEmail FROM emails WHERE id IS NOT NULL");
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);



?>
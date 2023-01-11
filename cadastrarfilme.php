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

$idFilme = $_POST['idFilme'];
$descFilme = $_POST['descFilme'];


$res = $pdo->query("DELETE FROM filmes WHERE id IS NOT NULL");

$pdo->query("INSERT INTO filmes (idFilme, descFilme) VALUES ('$idFilme','$descFilme')");

if($pdo){
    echo "foi";
    header('Location: index.php');
    ob_end_flush();
} else{
    echo "n foi";
}

?>
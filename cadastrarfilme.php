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

$idFilme = $_POST['idFilme'];
$descFilme = $_POST['descFilme'];


$res = $pdo->query("DELETE FROM filmes WHERE id IS NOT NULL");

$pdo->query("INSERT INTO filmes (idFilme, descFilme) VALUES ('$idFilme','$descFilme')");

if($pdo){
    echo "foi";
    header('Location: index.php');
} else{
    echo "n foi";
}

?>
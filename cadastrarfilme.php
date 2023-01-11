<?php
define ('HOST','localhost');
define ('USUARIO','root');
define ('SENHA','123456');
define ('DB','clbcnm');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('falha');

$idFilme = $_POST['idFilme'];
$descFilme = $_POST['descFilme'];


$query = mysqli_query($conexao, "INSERT INTO filmes (idFilme, descFilme) VALUES ('$idFilme', '$descFilme')");

if($query){
    echo "foi";
} else{
    echo "n foi";
}

?>
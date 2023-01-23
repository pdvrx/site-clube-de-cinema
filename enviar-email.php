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

$res = $pdo->query("DELETE FROM emails WHERE corpoEmail IS NOT NULL");

$corpoEmail = $_POST['corpoEmail'];

$pdo->query("INSERT INTO emails (corpoEmail) VALUES ('$corpoEmail')");

$corpo = "<html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
    

    body{
        text-align: center;
        justify-content: center;
        font-family: 'Source Sans Pro', sans-serif;
        background-color: #ece9e9;
    }
    
    img{
        width: 80%;
        
    }

    h1{
        font-size: 42px;
        font-style: italic;
    }

</style>
<body>
    <img src='https://uploaddeimagens.com.br/images/004/309/356/full/logo.png?1674492895' alt='a'>
    <h1>Olá, tudo bem?</h1>
    <p>$corpoEmail</p>
    <p>Contamos com a sua presença!</p>
</body>
</html>";

$assunto = "Encontro Clube de Cinema";

$headers = "MIME-Version: 1:0\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "From: <cinemacefetiando@gmail.com>";



$cmd = $pdo->prepare("SELECT email,corpoEmail FROM emails WHERE idEmail IS NOT NULL");
$cmd->execute();

while($row_emails = $cmd->fetch(PDO::FETCH_ASSOC)){
    mail($row_emails['email'], $assunto, $corpo, $headers);
}

if($pdo){
    echo "foi";
    header('Location: index.php');
    ob_end_flush();
} else{
    echo "n foi";
}

?>
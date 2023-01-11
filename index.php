<?php

define ('HOST','localhost');
define ('USUARIO','root');
define ('SENHA','123456');
define ('DB','clbcnm');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('falha');

$resultado = mysqli_query($conexao, "SELECT descFilme FROM filmes");


?>


<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Cinema</title>
    <link rel="icon" href="cefet.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <a href="cadastro.html"> <img src="logo.png" alt="" /></a>
            </div>
        </div>
    </header>

    <main>
    <div data-aos="fade-down" data-aos-duration="1700" >

        <h1 class="filme-da-semana">Filme da Semana</h1>

        <h1 id="titulo-filme"></h1>

        <div class="filme-info">
            <img id="poster" src="" alt="">
                
            <div class="textos-info">
                    <p>
                        <?php echo $?>
                    </p>
                    <h2>Sala de Artes às 17 hrs</h2>
                    <span id="rate"></span>
                    <div class="estrelas">
                        <ul class="avaliacao">
                            <li class="star-icon ativo" data-avaliacao="1"></li>
                            <li class="star-icon" data-avaliacao="2"></li>
                            <li class="star-icon" data-avaliacao="3"></li>
                            <li class="star-icon" data-avaliacao="4"></li>
                            <li class="star-icon" data-avaliacao="5"></li>
                          </ul>
                    </div>
            </div>
        </div>

        <div class="trailer">
<iframe id="link" width="560" height="315" src="https://www.youtube.com/embed/vU29VfayDMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
            
    </div>
    </main>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js" ></script>
    <script src="banco.js"></script>

</body>
</html>
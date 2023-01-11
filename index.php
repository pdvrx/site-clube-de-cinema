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

$cmd = $pdo->prepare("SELECT descFilme,idFilme FROM filmes WHERE id IS NOT NULL");
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);

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
                        <?php echo $resultado['descFilme']; ?>
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
    <script>

         url = "<?php echo $resultado['idFilme']; ?>"

        console.log(url)

        fetch('https://api.themoviedb.org/3/movie/'+url+'?api_key=7006774efe5e4045670045e98084b7c8')
        .then(resposta=>{
            return resposta.json()
        }).then(corpo=>{
            poster=corpo.poster_path
            nome=corpo.original_title
            nota=corpo.vote_average
            nota=nota*10
            document.getElementById("rate").innerHTML=Math.trunc(nota)
            document.getElementById("titulo-filme").innerHTML=nome
            document.getElementById("poster").src="https://image.tmdb.org/t/p/original" + poster

        });

        fetch('https://api.themoviedb.org/3/movie/'+url+'/videos?api_key=7006774efe5e4045670045e98084b7c8')
        .then(pegartrailer=>{
            return pegartrailer.json()
        }).then(trailer=>{
            console.log(trailer)
            v=trailer.results.length-1
            var link=(trailer.results[v].key)
            document.getElementById("link").src= "https://www.youtube.com/embed/"+link
        })

    </script>

</body>
</html>
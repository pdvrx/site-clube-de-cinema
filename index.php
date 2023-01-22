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
        <div data-aos="fade-down" data-aos-duration="1700" class="section">

            <h1 class="filme-da-semana">Filme da Semana</h1>

            <h1 id="titulo-filme"></h1>

            <div class="filme-info">
                <img id="poster" src="" alt="">
                    
                <div class="textos-info">
                        <p>
                            <?php echo $resultado['descFilme']; ?>
                        </p>
                        <h2>Sala de Artes às 17 hrs</h2>

                        <div class="estrelas">
                            <ul class="avaliacao">
                                <li class="star-icon" id="e1"></li>
                                <li class="star-icon" id="e2"></li>
                                <li class="star-icon" id="e3"></li>
                                <li class="star-icon" id="e4"></li>
                                <li class="star-icon" id="e5"></li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="trailer">
                <iframe id="link" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
        </div>
    </main>

    <div class="tela2">
        <div class="section">

            <h1 class="sbrns"> Sobre nós</h1>
            <div class="desc-projeto">
                <div class="center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
                </div>
                <h1 class="nsacp">nos acompanhe em outros portais</h1>
            </div>

            <div class="cards-collection">
                    <div class="cards">
                        <a target="_blank" href="https://en.wikipedia.org/wiki/Cat" class="fa-brands fa-instagram"></a>
                    </div>

             <div class="cards">

                        <button class="fa-brands fa-whatsapp" id="open-modal" ></button>
                    </div>

                    <div id="fade" class="hide"></div>
                    <div id="modal" class="hide">
                        <h1>Deseja receber aviso dos próximos encontros direto no seu WhatsApp?</h1>
                            <p id="zapinfo">Nos envie seu número para que possamos te notificar dos nossos encontros e eventos! </p>
                        <button id="close-modal" >Bora lá</button>
                     </div>

                    <div class="cards">
                        <a target="_blank" href="https://en.wikipedia.org/wiki/Cat" class="fa-brands fa-youtube"></a>
                    </div>

                    <div class="cards">
                        <a target="_blank" href="https://en.wikipedia.org/wiki/Cat" class="fa-brands fa-twitch"></a>
                    </div>
            </div>
        </div>
    </div>      



    <script src="https://kit.fontawesome.com/858c1077eb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js" ></script>
    <script>

        AOS.init();

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
            nota=Math.trunc(nota)
            document.getElementById("titulo-filme").innerHTML=nome
            document.getElementById("poster").src="https://image.tmdb.org/t/p/original" + poster
            
            
            var e1 = document.getElementsByClassName("star-icon")[0]
            var e2 = document.getElementsByClassName("star-icon")[1]
            var e3 = document.getElementsByClassName("star-icon")[2]
            var e4 = document.getElementsByClassName("star-icon")[3]
            var e5 = document.getElementsByClassName("star-icon")[4]


            if(nota>0 && nota<=20){
                e1.setAttribute('class','star-icon eon')
            }

            if(nota>20 && nota<=40){
                e2.setAttribute('class','star-icon eon')
            }

            if(nota>40 && nota<=60){
                e3.setAttribute('class','star-icon eon')
            }

            if(nota>60 && nota<=80){
                e4.setAttribute('class','star-icon eon')
            }

            if(nota>80){
                e5.setAttribute('class','star-icon eon')
            }

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
        
               const zap = document.querySelector("#close-modal")
        zap.onclick = function() {
            window.open('cadastrar-zap.html');

        }

    </script>

</body>
</html>
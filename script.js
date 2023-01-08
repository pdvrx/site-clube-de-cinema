AOS.init();

url=315162

function cadastrarFilme(){

    var idFilme = document.getElementById('idFilme').value
    localStorage.url=idFilme
    location.href="index.html"

}

console.log(localStorage.url)


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

fetch('http://api.themoviedb.org/3/movie/'+url+'/videos?api_key=7006774efe5e4045670045e98084b7c8')
.then(pegartrailer=>{
    return pegartrailer.json()
}).then(trailer=>{
    console.log(trailer)
    v=trailer.results.length-1
    link=(trailer.results[v].key)
    document.getElementById("link").src= "https://www.youtube.com/embed/"+ link
})

function logar(){

    var login = document.getElementById('login').value
    var senha = document.getElementById('senha').value
    

    console.log(login)
    if(login== "admin" && senha=="admin"){
        alert('Sucesso')
        location.href="cadastrar-filme.html"
        localStorage.clear()
    }else{
        alert('Usuário ou Senha incorretos')
    }
}

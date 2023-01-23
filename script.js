

url=315162
var nota;

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




console.log(localStorage.url)


function logar(){

    var login = document.getElementById('login').value
    var senha = document.getElementById('senha').value
    

    console.log(login)
    if(login== "admin" && senha=="admin"){
        alert('Sucesso')
        location.href="menu.html"
        localStorage.clear()
    }else{
        alert('Usuário ou Senha incorretos')
    }
}


const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    [modal, fade].forEach((el)=>el.classList.toggle("hide"))
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});

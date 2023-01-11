AOS.init();


url=315162


console.log(localStorage.url)


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

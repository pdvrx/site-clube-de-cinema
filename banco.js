var db = openDatabase("ccBD", "2.0", "meuBanco", 4048);
db.transaction(function(criar){
    criar.executeSql("CREATE TABLE filmes (idFilme TEXT PRIMARY KEY , descFilme TEXT)");
});

function salvar(){
    var idFilme = document.getElementById("idFilme").value
    var descFilme = document.getElementById("descFilme").value

    db.transaction(function (pegar){
        pegar.executeSql("INSERT INTO filmes (idFilme, descFilme) VALUES (?,?)",[idFilme,descFilme]);
        location.href="index.html"
    });

}

function logar(){

    var login = document.getElementById('login').value
    var senha = document.getElementById('senha').value
    

    console.log(login)
    if(login== "admin" && senha=="admin"){
        alert('Sucesso')
        location.href="cadastrar-filme.html"
        db.transaction(function(limpar){
            limpar.executeSql("DELETE FROM filmes");
        })
    }else{
        alert('Usuário ou Senha incorretos')
    }
}
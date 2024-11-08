document.addEventListener("DOMContentLoaded", () => {
    listarTodos();
});

function listarTodos() {
    fetch("listar.php",
        {
            method: "GET",
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(musica => inserirMusicas(musica))
        .catch(error => console.log(error));
}

function inserirMusicas(musica) {
    for (const musicas of musica) {
        inserirMusicas(musica);
    }
}

function inserirMusicas(musica) {
    let tbody = document.getElementById('musicas');
    let tr = document.createElement('tr');
    let tdId_titulo = document.createElement('td');
    tdId_titulo.innerHTML = musica.titulo;
    let tdTitulo = document.createElement('td');
    tdTitulo.innerHTML = musica.titulo;
    let tdArtista = document.createElement('td');
    tdArtista.innerHTML = musica.artista;
    let tdGenero = document.createElement('td');
    tdGenero.innerHTML = musica.titulo;
    let tdAno = document.createElement('td');
    tdAno.innerHTML = musica.ano;
    let tdAlterar = document.createElement('td');
    let btnAlterar = document.createElement('button');
    btnAlterar.innerHTML = "Alterar";
    btnAlterar.addEventListener("click", buscaMusica, false);
    btnAlterar.id_titulo = musica.id_titulo;
    tdAlterar.appendChild(btnAlterar);
    let tdExcluir = document.createElement('td');
    let btnExcluir = document.createElement('button');
    btnExcluir.addEventListener("click", excluir, false);
    btnExcluir.id_titulo = musica.id_titulo;
    btnExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);
    tr.appendChild(tdId_titulo);
    tr.appendChild(tdtitulo);
    tr.appendChild(tdArtista);
    tr.appendChild(tdGenero);
    tr.appendChild(tdAno);
    tr.appendChild(tdAlterar);
    tr.appendChild(tdExcluir);
    tbody.appendChild(tr);
}

function excluir(evt) {
    let id_titulo = evt.currentTarget.id_titulo;
    let excluir = confirm("Você tem certeza que deseja excluir este titulo?");
    if (excluir == true) {
        fetch('excluir.php?id_titulo=' + id_titulo,
            {
                method: "GET",
                headers: { 'Content-Type': "application/json; charset=UTF-8" }
            }
        )
            .then(response => response.json())
            .then(retorno => excluirMusica(retorno, id_titulo))
            .catch(error => console.log(error));
    }
}

function excluirMusica(retorno, id_titulo) {
    if (retorno == true) {
        let tbody = document.getElementById('musicas');
        for (const tr of tbody.children) {
            if (tr.children[0].innerHTML == id_titulo) {
                tbody.removeChild(tr);
            }
        }
    }
}

function alterarMusica(musica) {
    let tbody = document.getElementById('musicas');
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == musica.id_musica) {
            tr.children[1].innerHTML = musica.titulo;
            tr.children[2].innerHTML = musica.artista;
            tr.children[3].innerHTML = musica.genero;
            tr.children[4].innerHTML = musica.ano;
        }
    }
}

function buscaMusica(evt) {
    let id_titulo = evt.currentTarget.id_titulo;
    fetch('buscaMusica.php?id_titulo=' + id_titulo,
        {
            method: "GET",
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(musica => preencheForm(musica))
        .catch(error => console.log(error));
}
// continuar depois daqjui
function preencheForm(usuario) {
    let inputIDUsuario = document.getElementsByName("id_usuario")[0];
    inputIDUsuario.value = usuario.id_usuario;
    let inputNome = document.getElementsByName("nome")[0];
    inputNome.value = usuario.nome
    let inputEmail = document.getElementsByName("email")[0];
    inputEmail.value = usuario.email;
}

function salvarUsuario(event) {
    // parar o comportamento padrão do form
    event.preventDefault();
    // obtém o input id_usuario
    let inputIDUsuario = document.getElementsByName("id_usuario")[0];
    // pega o valor do input id_usuario
    let id_usuario = inputIDUsuario.value;

    let inputNome = document.getElementsByName("nome")[0];
    let nome = inputNome.value;
    let inputEmail = document.getElementsByName("email")[0];
    let email = inputEmail.value;
    let inputSenha = document.getElementsByName("senha")[0];
    let senha = inputSenha.value;

    if (id_usuario == "") {
        cadastrar(id_usuario, nome, email, senha);
    } else {
        alterar(id_usuario, nome, email, senha);
    }
    document.getElementsByTagName('form')[0].reset();
}

function cadastrar(id_usuario, nome, email, senha) {
    fetch('inserir.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_usuario: id_usuario,
                nome: nome,
                email: email,
                senha: senha
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(usuario => inserirUsuario(usuario))
        .catch(error => console.log(error));
}

function alterar(id_usuario, nome, email, senha) {
    fetch('alterar.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_usuario: id_usuario,
                nome: nome,
                email: email,
                senha: senha
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(usuario => alterarUsuario(usuario))
        .catch(error => console.log(error));
}
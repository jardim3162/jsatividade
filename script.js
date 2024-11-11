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
        inserirMusicas(musicas);
    }
}

function inserirMusicas(musicas) {
    let tbody = document.getElementById('musicas');
    let tr = document.createElement('tr');
    let tdID_titulo = document.createElement('td');
    tdID_titulo.innerHTML = musicas.id_titulo;
    let tdTitulo = document.createElement('td');
    tdTitulo.innerHTML = musicas.titulo;
    let tdArtista = document.createElement('td');
    tdArtista.innerHTML = musicas.artista;
    let tdGenero = document.createElement('td');
    tdGenero.innerHTML = musicas.genero;
    let tdAno = document.createElement('td');
    tdAno.innerHTML = musicas.ano;
    let tdAlterar = document.createElement('td');
    let btnAlterar = document.createElement('button');
    btnAlterar.innerHTML = "Alterar";
    btnAlterar.addEventListener("click", buscaMusica, false);
    btnAlterar.id_titulo = musicas.id_titulo;
    tdAlterar.appendChild(btnAlterar);
    let tdExcluir = document.createElement('td');
    let btnExcluir = document.createElement('button');
    btnExcluir.addEventListener("click", excluir, false);
    btnExcluir.id_titulo = musicas.id_titulo;
    btnExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);
    tr.appendChild(tdID_titulo);
    tr.appendChild(tdTitulo);
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

function alterarMusica(musicas) {
    let tbody = document.getElementById('musicas');
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == musicas.id_titulo) {
            tr.children[1].innerHTML = musicas.titulo;
            tr.children[2].innerHTML = musicas.artista;
            tr.children[3].innerHTML = musicas.genero;
            tr.children[4].innerHTML = musicas.ano;
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
        .then(musicas => preencheForm(musicas))
        .catch(error => console.log(error));
}
// continuar depois daqjui
function preencheForm(musicas) {
    let inputID_titulo = document.getElementsByName("id_titulo")[0];
    inputID_titulo.value = musicas.id_titulo;
    let inputtitulo = document.getElementsByName("titulo")[0];
    inputtitulo.value = musicas.titulo;
    let inputartista = document.getElementsByName("artista")[0];
    inputartista.value = musicas.artista;
    let inputgenero = document.getElementsByName("genero")[0];
    inputgenero.value = musicas.genero;
    let inputano = document.getElementsByName("ano")[0];
    inputano.value = musicas.ano;
}

function salvarMusica(event) {
    // parar o comportamento padrão do form
    event.preventDefault();
    // obtém o input id_usuario
    let inputID_titulo = document.getElementsByName("id_titulo")[0];
    // pega o valor do input id_usuario
    let id_titulo = inputID_titulo.value;

    let inputtitulo = document.getElementsByName("titulo")[0];
    let titulo = inputtitulo.value;
    let inputartista = document.getElementsByName("artista")[0];
    let artista = inputartista.value;
    let inputgenero = document.getElementsByName("genero")[0];
    let genero = inputgenero.value;
    let inputano = document.getElementsByName("ano")[0];
    let ano = inputano.value;

    if (id_titulo == "") {
        cadastrar(id_titulo, titulo, artista, genero, ano);
    } else {
        alterar(id_titulo, titulo, artista, genero, ano);
    }
    document.getElementsByTagName('form')[0].reset();
}

function cadastrar(id_titulo, titulo, artista, genero, ano) {
    fetch('inserir.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_titulo: id_titulo,
                titulo: titulo,
                artista: artista,
                genero: genero,
                ano: ano
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(musicas => inserirMusicas(musicas))
        .catch(error => console.log(error));
}

function alterar(id_titulo, titulo, artista, genero, ano) {
    fetch('alterar.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_titulo: id_titulo,
                titulo: titulo,
                artista: artista,
                genero: genero,
                ano: ano
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(musicas => alterarMusica(musicas))
        .catch(error => console.log(error));
}
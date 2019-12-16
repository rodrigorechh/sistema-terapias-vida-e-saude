var botoesEditar = document.querySelectorAll('.editar');
var formEdita = document.querySelector('#formEdita');
var formAdd = document.querySelector('#formAdd');


botoesEditar.forEach(botao => {
    console.log(botao.getAttribute("data-cpf"));
    botao.addEventListener('click', () => {
        let cpf = botao.getAttribute("data-cpf");
        let telefone = botao.getAttribute("data-telefone");
        let celular = botao.getAttribute("data-celular");
        let genero = botao.getAttribute("data-genero");
        let foto = botao.getAttribute("data-foto");
        let nome = botao.getAttribute("data-nome");
        let email = botao.getAttribute("data-email");
        let data_nascimento = botao.getAttribute("data-data_nascimento");
        formAdd.style.display = 'none';
        formEdita.style.display = 'block';
        if(genero == 'M'){
            generoEdita = document.querySelector('#generoEditaM');
            generoEdita.checked = true;
        }
        else {
            generoEdita = document.querySelector('#generoEditaF');
            generoEdita.checked = true;
        }

        dataEdita = document.querySelector('#dataEdita');
        dataEdita.value = data_nascimento;
        nomeEdita = document.querySelector('#nomeEdita');
        nomeEdita.value = nome;
        emailEdita = document.querySelector('#emailEdita');
        emailEdita.value = email;
        telefoneEdita = document.querySelector('#telefoneEdita');
        telefoneEdita.value = telefone;
        celularEdita = document.querySelector('#celularEdita');
        celularEdita.value = celular;
        cpfEdita = document.querySelector('#cpfEdita');
        cpfEdita.value = cpf;
        //console.log(formAdd.style.display);
        //formAdd.style.display = 'none';
        //formEdita.style.display = 'block';    
    });
});






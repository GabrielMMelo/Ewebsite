function enviar() {
    var nome = document.getElementById("inputNome"), email = document.getElementById("inputEmail");

    if (nome.value !== "" && email.value !== "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso!');
    }
    else {
    	alert('Erro sr(a) ' + nome.value + ' os seus dados não foram encaminhados com sucesso!');
    }
}
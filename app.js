const dadosCliente = [];


function adicionarPedido() {
    const endereco = document.getElementById("endereco").value;
    const nome = document.getElementById("nome").value;
    const telefone = document.getElementById("telefone").value;
    const cpf = document.getElementById("cpf").value;
    const email = document.getElementById("email").value;
    endereco.push(dadosCliente);

    console.log(dadosCliente);

}



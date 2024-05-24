<script>
    function toggleForm(showId, hideId) {
    document.getElementById(showId).style.display = "block";
    document.getElementById(hideId).style.display = "none";
}

    function pesquisarCliente(tipo) {
    // Lógica para pesquisar cliente pelo CNPJ ou CPF
    // Aqui você pode adicionar a lógica para chamar os arquivos correspondentes para pesquisa
    // Exemplo de chamada de arquivo:
    if (tipo === 'cnpj') {
    // Chamar arquivo para pesquisa de cliente jurídico
    console.log('Pesquisar cliente jurídico...');
} else if (tipo === 'cpf') {
    // Chamar arquivo para pesquisa de cliente físico
    console.log('Pesquisar cliente físico...');
}
}

    function limparCampos() {
    document.getElementById('cpf').value = '';
    document.getElementById('cnpj').value = '';
    document.getElementById("razaoSocial").value = '';
    document.getElementById("nomeFantasia").value = '';
}
</script>
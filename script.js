function excluirCliente(formId) {
  if (confirm("Tem certeza que deseja excluir este cliente?")) {
    // Aqui você pode adicionar o código para enviar uma solicitação para excluir o cliente do banco de dados
    // Por exemplo, você pode usar AJAX para enviar uma solicitação para o servidor
    console.log("Excluir cliente:", formId);
    // Resetar o formulário após a exclusão (opcional)
    document.getElementById(formId).reset();
  }
}

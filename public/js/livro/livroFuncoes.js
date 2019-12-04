
$(document).ready(function () {
    $("#anolancamento").mask("9999");
});

function apagarLivro($idlivro) {
    if (confirm("Confirmar exclusão do livro?")) {
        document.location.href = '/livroApagar/' + $idlivro;
    }
}


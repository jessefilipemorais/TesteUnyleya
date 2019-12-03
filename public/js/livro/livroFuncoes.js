
$(document).ready(function () {
    $("#analancamento").mask("9999");
});

function apagarLivro($idlivro) {
    if (confirm("Confirmar exclusão do livro?")) {
        document.location.href = '/autorLivro/' + $idlivro;
    }
}


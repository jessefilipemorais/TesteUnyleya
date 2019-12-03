/*
$(document).ready(function () {
    $("#anonascimento").mask("9999");
});
*/
function apagarEditora($ideditora) {
    if (confirm("Confirmar exclusão da editora?")) {
        document.location.href = '/editoraApagar/' + $ideditora;
    }
}


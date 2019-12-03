
$(document).ready(function () {
    $("#anonascimento").mask("9999");
});

function apagarAutor($idautor) {
    if (confirm("Confirmar exclusão do autor?")) {
        document.location.href = '/autorApagar/' + $idautor;
    }
}


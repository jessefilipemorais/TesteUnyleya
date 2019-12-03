/*
$(document).ready(function () {
    $("#anonascimento").mask("9999");
});
*/
function apagarGeneroliterario($idgenliterario) {
    if (confirm("Confirmar exclusão de gênero literário?")) {
        document.location.href = '/generoliterarioApagar/' + $idgenliterario;
    }
}


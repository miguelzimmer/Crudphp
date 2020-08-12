$(document).ready(() => {
    $('#produtos').DataTable({
        "ajax": "listar.php",
        "columns": [
            { "data": "id" },
            { "data": "cep_origem" },
            { "data": "cep_destino" }
        ]
    });
});
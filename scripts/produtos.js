$(document).ready(() => {
    $('#produtos').DataTable({
        "ajax": "processa.php",
        "columns": [
            { "data": "id" },
            { "data": "cep_origem" },
            { "data": "cep_destino" }
        ]
    });
});
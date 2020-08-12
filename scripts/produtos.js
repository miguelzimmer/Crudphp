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

$(document).ready(function() {
    var table = $('#produtos').DataTable();
 
    $('#produtos tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#deletar').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );
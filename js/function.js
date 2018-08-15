$(function(){

    // Lista de Continentes
    $.post( 'depto.php' ).done( function(respuesta)
    {
        $( '#depto' ).html( respuesta );
    });

    // lista de Paises
    $('#depto').change(function()
    {
        var el_depto = $(this).val();

        // Lista de Paises
        $.post( 'mpio.php', { continente: el_depto} ).done( function( respuesta )
        {
            $( '#mpio' ).html( respuesta );
        });
    });

    // Lista de Ciudades
    $( '#mpio' ).change( function()
    {
        var muni = $(this).children('option:selected').html();
        alert( 'Lista de Ciudades de ' + muni );
    });

})
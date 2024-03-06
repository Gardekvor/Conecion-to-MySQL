$(document).ready(function() {
    // Obtener datos del backend
    $.ajax({
        url: 'datos.php', // Cambiar el nombre del archivo según tu configuración
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Mostrar datos en la tabla HTML
            data.forEach(function(elemento) {
                $('#tbody').append(`
                    <tr>
                        <td>${elemento.id}</td>
                        <td>${elemento.nombre}</td>
                        <td>${elemento.precio}</td>
                        <td>${elemento.existencia}</td>
                    </tr>
                `);
            });
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener datos:', status, error);
        }
    });
});
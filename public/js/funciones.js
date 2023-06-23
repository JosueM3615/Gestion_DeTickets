// Obtener el elemento select y el contenedor de opciones seleccionadas
var selectElement = document.getElementById('categoria');
var opcionesSeleccionadasContainer = document.getElementById('seleccionadas');

// Agregar evento change al select
selectElement.addEventListener('change', function() {
    // Obtener todas las opciones seleccionadas
    var opcionesSeleccionadas = Array.from(selectElement.selectedOptions).map(function(option) {
        return option.text;
    });

    // Actualizar el contenido del contenedor con las opciones seleccionadas
    opcionesSeleccionadasContainer.textContent += opcionesSeleccionadas.join(', ');
});

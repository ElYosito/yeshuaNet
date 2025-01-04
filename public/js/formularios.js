document.addEventListener('DOMContentLoaded', function() {
    const tipoEventoSelect = document.getElementById('tipoEvento');
    const formLigaNormal = document.getElementById('formLigaNormal');
    const formVisita = document.getElementById('formVisita');
    const formLigaUnida = document.getElementById('formLigaUnida');
    const formConcentracion = document.getElementById('formConcentracion');
    const formVenta = document.getElementById('formVenta');

    // Función para ocultar todos los formularios
    function hideAllForms() {
        formLigaNormal.style.display = 'none';
        formVisita.style.display = 'none';
        formLigaUnida.style.display = 'none';
        formConcentracion.style.display = 'none';
        formVenta.style.display = 'none';
    }

    // Evento para mostrar el formulario dependiendo del tipo de evento
    tipoEventoSelect.addEventListener('change', function() {
        hideAllForms(); // Ocultar todos los formularios al principio

        if (this.value == "1") {
            formLigaNormal.style.display = 'block'; // Mostrar formulario Liga normal
        } else if (this.value == "2") {
            formVisita.style.display = 'block'; // Mostrar formulario Visita
        } else if (this.value == "3") {
            formConcentracion.style.display = 'block'; // Mostrar formulario Concentración
        } else if (this.value == "4") {
            formVenta.style.display = 'block'; // Mostrar formulario Venta
        } else if (this.value == "5") {
            formLigaUnida.style.display = 'block'; // Mostrar formulario Liga unida
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const fechaInput = document.getElementById('fecha');
    const diaSelect = document.getElementById('diaSemana');
    const form = document.getElementById('formEvento');

    // Traducción de días de la semana
    const diasSemana = [
        'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'
    ];

    // Evento cuando el usuario selecciona una fecha
    fechaInput.addEventListener('change', function() {
        const fecha = new Date(this.value + 'T00:00:00'); // Forzar hora local
        if (!isNaN(fecha)) {
            const dia = fecha.getDay(); // Obtener el número del día (0-6)
            diaSelect.value = diasSemana[dia]; // Seleccionar el valor correcto en el select
        }
    });

    // Antes de enviar el formulario, habilitar el select
    form.addEventListener('submit', function() {
        diaSelect.disabled = false; // Habilitar el campo temporalmente
    });
});
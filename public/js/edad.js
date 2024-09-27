function calcularEdad() {
    // Obtener la fecha de nacimiento desde el input
    let fechaNacimiento = document.getElementById('fecha_nacimiento').value;

    // Calcular la edad
    let fechaActual = new Date();
    let fechaNac = new Date(fechaNacimiento);
    let edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si aún no ha pasado el cumpleaños este año
    if (fechaNac.getMonth() > fechaActual.getMonth() ||
        (fechaNac.getMonth() === fechaActual.getMonth() && fechaNac.getDate() > fechaActual.getDate())) {
        edad--;
    }

    // Actualizar el campo de edad
    document.getElementById('edad').value = edad;
}
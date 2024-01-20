// Obtener todos los elementos de entrada
const inputs = document.querySelectorAll('.form-check-input');

// Escuchar eventos de cambio en los inputs
inputs.forEach(input => {
    input.addEventListener('change', function() {
        // Restablecer todos los estilos a opacidad reducida
        inputs.forEach(inp => {
            inp.nextElementSibling.style.opacity = '0.8';
            inp.nextElementSibling.style.fontWeight = 'normal';
        });

        // Resaltar la opción seleccionada
        if (this.checked) {
            this.nextElementSibling.style.opacity = '1';
            this.nextElementSibling.style.fontWeight = 'bold';
        }
    });
});

// EVENTO LOAD
window.addEventListener('load', () => {
    console.log('StarWrok cargado correctamente');
});

// EVENTO MOUSEOVER
const productos = document.querySelectorAll('.producto');

productos.forEach(producto => {

    producto.addEventListener('mouseover', () => {
        producto.style.transform = 'scale(1.03)';
    });

    producto.addEventListener('mouseout', () => {
        producto.style.transform = 'scale(1)';
    });
});

// EVENTO FOCUS
const inputs = document.querySelectorAll('input');

inputs.forEach(input => {

    input.addEventListener('focus', () => {
        input.style.border = '2px solid cyan';
    });

    input.addEventListener('blur', () => {
        input.style.border = '1px solid rgba(255,255,255,0.08)';
    });
});

// EVENTO SUBMIT
const formularios = document.querySelectorAll('form');

formularios.forEach(formulario => {

    formulario.addEventListener('submit', () => {
        alert('Procesando acción...');
    });
});
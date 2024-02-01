let tbUsuarios;

const formulario = document.querySelector('#formulario');
const nombres = document.querySelector('#nombres');
const apellidos = document.querySelector('#apellidos');
const correo = document.querySelector('#correo');
const telefono = document.querySelector('#telefono');
const direccion = document.querySelector('#direccion');
const clave = document.querySelector('#clave');
const rol = document.querySelector('#rol');
// elementos para motrar errores
const errorNombre = document.querySelector('#errorNombre');
const errorApellido = document.querySelector('#errorApellido');
const errorCorreo = document.querySelector('#errorCorreo');
const errorTelefono = document.querySelector('#errorTelefono');
const errorDireccion = document.querySelector('#errorDireccion');
const errorClave = document.querySelector('#errorClave');
const errorRol = document.querySelector('#errorRol');

document.addEventListener('DOMContentLoaded', function () {
    // cargar datos con el plugin de datatables
    $('#tbUsuarios').DataTable({
        ajax: {
            url: base_url + 'usuarios/listar',
            dataSrc: ''
        },

        columns: [
            { data: 'nombre' },
            { data: 'correo' },
            { data: 'telefono' },
            { data: 'direccion' },
            { data: 'rol' },
            { data: 'acciones' }
        ],

        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
            //url: 'assets/js/espaniol.json',


        },
        dom,
        buttons
    });
    //registrar usuarios
    formulario.addEventListener('submit', function (e) {
        e.preventDefault();
        
            errorNombre.textContent = '';
            errorApellido.textContent = '';
            errorCorreo.textContent = '';
            errorTelefono.textContent = '';
            errorDireccion.textContent = '';
            errorClave.textContent = '';
            errorRol.textContent = '';

        // creamos una validacion
        if (nombres.value == '') {
            errorNombre.textContent = 'EL NOMBRE ES REQUERIDO';

        }else if (apellidos.value = '') {
            errorApellido.textContent = 'EL APELLIDO ES REQUERIDO';

        }else if (correo.value = '') {
            errorCorreo.textContent = 'EL correo ES REQUERIDO';

        }else if (telefono.value = '') {
            errorTelefono.textContent = 'EL telefono ES REQUERIDO';

        }else if (direccion.value = '') {
            errorDireccion.textContent = 'EL direccion ES REQUERIDO';

        }else if (clave.value = '') {
            errorClave.textContent = 'la clave ES REQUERIDO';

        }else if (rol.value = '') {
            errorRol.textContent = 'EL rol ES REQUERIDO';

        }else{

        }
    })

})
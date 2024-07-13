// validaciones.js

$(document).ready(function () {
    // Monitorizar el envío del formulario de categorías
    $('#formularioCategorias').on('submit', function (event) {
        event.preventDefault(); // Prevenir el envío del formulario

        // Obtener los valores de los campos
        let idCategorias = $('#codigoCategorias').val();
        let nombreCategorias = $('#nombreCategorias').val();

        // Array para almacenar los mensajes de error
        let errores = [];

        // Validar el campo 'ID de la categoría'
        if ($.trim(idCategorias) === '') {
            errores.push('El campo "Código de la categoría" está vacío.');
        }

        // Validar el campo 'Nombre de la categoría'
        if ($.trim(nombreCategorias) === '') {
            errores.push('El campo "Nombre de la categoría" está vacío.');
        }

        // Mostrar todos los errores en una sola alerta
        if (errores.length > 0) {
            alert(errores.join('\n') + '\n\nHecho por - Miguel Ángel Monzón Martínez');
            return false; // Detener el envío del formulario
        }

        // Si todos los campos están completos, permitir el envío del formulario
        this.submit();
    });

    // Monitorizar el envío del formulario de productos (Ejemplo)
    $('#formularioProductos').on('submit', function (event) {
        event.preventDefault(); // Prevenir el envío del formulario

        // Obtener los valores de los campos (Ejemplo)
        let nombreProducto = $('#nombreProducto').val();
        let descripcionProducto = $('#descripcionProducto').val();
        let precioProducto = $('#precioProducto').val();
        let categoriaProducto = $('#categoriaProducto').val();


        // Lista de campos vacíos
        var camposVacios = [];

        // Validar cada campo
        if ($.trim(nombreProducto) === '') {
            camposVacios.push('Nombre del producto');
        }
        if ($.trim(descripcionProducto) === '') {
            camposVacios.push('Descripción del producto');
        }
        if ($.trim(precioProducto) === '') {
            camposVacios.push('Precio del producto');
        }
        if ($.trim(categoriaProducto) === '') {
            camposVacios.push('Categoria del producto');
        }
        

        // Mostrar alerta si hay campos vacíos
        if (camposVacios.length > 0) {
            alert('Los siguientes campos están vacíos:\n' + camposVacios.join('\n') + '\n\nHecho por - Miguel Ángel Monzón Martínez');
        } else {
            // Si no hay campos vacíos, permitir el envío del formulario
            this.submit();
        }
    });
});

// Espera a que el documento esté completamente cargado
$(document).ready(function () {
    
    // Escucha el evento click en algún elemento específico
    $(".click-modal-demo").click(function () {
        // Muestra el modal
        $("#staticBackdrop").modal("show");
    });

    // Obtiene todos los formularios en la página
    var formularios = document.getElementsByTagName("form");

    // Itera sobre los formularios y agrega el evento submit
    for (var i = 0; i < formularios.length; i++) {
        formularios[i].addEventListener("submit", function (event) {
            // Evita la carga predeterminada del formulario
            event.preventDefault();
            $("#staticBackdrop").modal("show");
        });
    }

});


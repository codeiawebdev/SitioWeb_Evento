(function () {
  'use strict';

  // Selecciona todos los elementos con la clase 'needs-validation'
  var forms = document.querySelectorAll('.needs-validation');
  
  // Convierte la NodeList en un array e itera sobre cada formulario
  Array.prototype.slice.call(forms)
      .forEach(function (form) {
          // Agrega un event listener de submit a cada formulario
          form.addEventListener('submit', function (event) {
              // Verifica si el formulario no es válido
              if (!form.checkValidity()) {
                  // Evita la presentación predeterminada del formulario
                  event.preventDefault();
                  // Detiene la propagación del evento
                  event.stopPropagation();
              }

              // Agrega la clase 'was-validated' al formulario
              form.classList.add('was-validated');
          }, false);
      });
})();
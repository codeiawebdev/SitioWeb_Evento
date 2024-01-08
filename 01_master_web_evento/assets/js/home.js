document.addEventListener('DOMContentLoaded', function () {
  var menuItems = document.querySelectorAll('#menuItems li a');
  var offcanvasElement = document.getElementById('offcanvasNavbar');
  var bootstrapOffcanvas = new bootstrap.Offcanvas(offcanvasElement);

  // CERRAR EL MENU LATERAL AL HACER CLIC EN UNA OPCION

  menuItems.forEach(function (item) {
    item.addEventListener('click', function () {
      bootstrapOffcanvas.hide();
    });
  });

  // CERRAR EL MENU LATERAL CUANDO EL ANCHO ES MAYOR A 991 PIXELES

  offcanvasElement.addEventListener('shown.bs.offcanvas', function () {
    window.addEventListener('resize', function () {
      if (window.innerWidth > 991) {
        bootstrapOffcanvas.hide();
      }
    });
  });
});

// Espera a que se cargue completamente el contenido de la página
window.addEventListener('DOMContentLoaded', function() {
  var scrollLinks = document.querySelectorAll('.custom-nav-memu a.nav-link');
  var scrollminiLinks = document.querySelectorAll('.mini-nav-link');
  var menuHeight = document.querySelector('nav').offsetHeight;

  scrollLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var targetId = link.getAttribute('href');
      var targetPosition = document.querySelector(targetId).offsetTop - menuHeight;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    });
  });

  scrollminiLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var targetId = link.getAttribute('href');
      var targetPosition = document.querySelector(targetId).offsetTop - menuHeight;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    });
  });

});

// document.addEventListener("DOMContentLoaded", function () {
//   // Obtener todos los enlaces de navegación
//   var navLinks = document.querySelectorAll('.custom-nav-memu a.nav-link');

//   // Agregar un evento de clic a cada enlace
//   navLinks.forEach(function (link) {
//       link.addEventListener('click', function () {
//           // Remover la clase activa de todos los enlaces
//           navLinks.forEach(function (innerLink) {
//               innerLink.classList.remove('active');
//           });

//           // Agregar la clase activa al enlace que se hizo clic
//           this.classList.add('active');
//       });
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  var navLinks = document.querySelectorAll('.custom-nav-memu a.nav-link');
  var footerNavLinks = document.querySelectorAll('.footer-links a.mini-nav-link');

  function removeActiveClassFromLinks(links) {
      links.forEach(function (link) {
          link.classList.remove('active');
      });
  }

  function addActiveClass(link) {
      link.classList.add('active');
  }

  function handleNavClick(link) {
      removeActiveClassFromLinks(navLinks);
      addActiveClass(link);
  }

  navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
          handleNavClick(this);
      });
  });

  footerNavLinks.forEach(function (footerLink) {
      footerLink.addEventListener('click', function () {
          var targetId = footerLink.getAttribute('href');
          var correspondingNavLink = document.querySelector('a[href="' + targetId + '"]');
          if (correspondingNavLink) {
              handleNavClick(correspondingNavLink);
          }
      });
  });
});
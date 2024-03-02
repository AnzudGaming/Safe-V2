let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

document.addEventListener('DOMContentLoaded', function () {
  // Obtén todas las etiquetas 'a' en la página
  var enlaces = document.querySelectorAll('a');

  // Itera sobre todas las etiquetas 'a'
  enlaces.forEach(function (enlace) {
      // Agrega un listener de clic a cada enlace
      enlace.addEventListener('click', function (event) {
          // Verifica si el atributo href es "#" o está vacío
          if (this.getAttribute('href') === '#' || this.getAttribute('href') === '') {
              // Muestra la alerta SweetAlert2
              Swal.fire({
                  icon: 'info',
                  title: 'Aviso',
                  text: 'Aún no hay una acción definida para este enlace.'
              });
              // Detiene la propagación del clic y el comportamiento predeterminado
              event.stopPropagation();
              event.preventDefault();
          }
      });
  });
});
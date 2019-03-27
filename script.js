   function cerrar() {
       evento = document.getElementById("evento");
       carta = document.getElementById("carta");
       contacto = document.getElementById("contacto");
       evento.style.opacity = 0;
       evento.style.display = "none";
       contacto.style.opacity = 0;
       contacto.style.display = "none";
       carta.style.opacity = 0;
       carta.style.display = "none";
   }

   function iniciocarta() {
       carta = document.getElementById("carta");
       cerrar();
       carta.style.display = "block";
       carta.style.opacity = 1;
   }

   function inicioevento() {
       evento = document.getElementById("evento");
       cerrar();
       evento.style.display = "block";
       evento.style.opacity = 1;
   }

   function iniciocontacto() {
       contacto = document.getElementById("contacto");
       cerrar();
       contacto.style.display = "block";
       contacto.style.opacity = 1;
   }

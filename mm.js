// 1. Atrapamos el botón por su ID (usamos #)
const boton = document.querySelector("#mi-boton");

// 2. Atrapamos el primer elemento de la lista por su clase (usamos .)
const primerProducto = document.querySelector(".producto");

// 3. Atrapamos el título por su etiqueta (sin símbolos)
const titulo = document.querySelector("h1");

function Footer() {
  return (
    <footer>
      <p>© 2024 Mi Sitio Web - Todos los derechos reservados</p>
    </footer>
  );
}

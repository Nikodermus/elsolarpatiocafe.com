console.log("hola");
let cajon = 2;


let menu = document.getElementById("menu");
let postre = document.querySelector(".menu__contenedor-postres");

let salir = () => {
    console.log(".nosotros_prueba");
    postre.classList.add("nosotros_prueba");
};

let comida = document.addEventListener("click", salir);
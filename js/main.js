/* global retinajs */

document.addEventListener('DOMContentLoaded', () => {
    retinajs();
    console.log('ready');
});

const entradas = document.querySelector('#entradas')
const popUpEntradas = document.querySelector('#popUpEntradas')
entradas.addEventListener('click', ()=>{
     popUpEntradas.classList.add('show')
 })

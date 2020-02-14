/* global retinajs */

document.addEventListener('DOMContentLoaded', () => {
    retinajs();

    const entradas = document.querySelectorAll('.popUp');
    const html = document.querySelector('html');

    const showPopUp = (e) => {
        const idBtn = e.target.id;
        const popUpMenu = document.querySelector(`#popUp${idBtn}`);
        popUpMenu.classList.add('show');
        const equis = popUpMenu.querySelector('.equis');
        equis.addEventListener('click', () => {
            popUpMenu.classList.remove('show');
            html.classList.remove('stop');
        });
        html.classList.add('stop');
    };
    for (let i = 0; i < entradas.length; i += 1) {
        entradas[i].addEventListener('click', showPopUp);
    }
});

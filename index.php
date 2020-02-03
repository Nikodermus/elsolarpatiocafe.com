<?php
$title = 'El Solar Patio Café';
$description = 'El Solar Patio Café';
$keywords = 'keywords, divided, by, commas';

require './pages/base/head.php';
require './pages/lib/nav.php';
require './pages/lib/popup.php';
?>
<div class="slider">
    <img class="slider__img" src="/static/img/slider-prueba-04.jpg" alt="restaurante" />
    <img class="slider__img" src="/static/img/slider-prueba-reves-04.jpg" alt="restaurante" />
    <img class="slider__img" src="/static/img/slider-prueba-04.jpg" alt="restaurante" />
    <img class="slider__img" src="/static/img/slider-prueba-reves-04.jpg" alt="restaurante" />
    <button class="slider__boton slider__boton--left" onclick="plusDivs(-1)">
        &#10094;
    </button>
    <button class="slider__boton slider__boton--right" onclick="plusDivs(+1)">
        &#10095;
    </button>
</div>

<main>
    <article class="nosotros" id="nosotros">
        <h2>Nosotros</h2>

        <div class="nosotros__contenido">
            <div class="nosotros__columna">
                <img src="/static/img/tia-05.png" alt="" />
            </div>
            <div class="nosotros__columna">
                <p class="nosotros__columna nosotros__parrafo">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident
                    delectus itaque sequi laboriosam ut dolores, ab enim aspernatur
                    atque reprehenderit id tempora dolor, aut quod architecto. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Consequatur,
                    quibusdam, possimus numquam nam deleniti nisi quasi vel ipsum minus
                    odio impedit et. Facilis repellat unde quidem quaerat minus dolores
                    iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eveniet placeat impedit sed accusantium, nobis nulla ullam, quas
                    delectus ipsa libero rem quam repellendus dolorem quisquam. Sit
                    inventore ullam mollitia ea! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Assumenda, incidunt fugit officiis eligendi ut
                    tempore officia. Vero expedita dicta soluta aut omnis architecto.
                    Nesciunt ducimus excepturi corrupti, eveniet dignissimos fugiat?
                </p>
                <img src="/static/img/patio-05.png" alt="" />
            </div>
        </div>
    </article>
    <article class="menu" id="menu">
        <h2>Menú</h2>
        <div class="menu__contenido">
            <div class="menu__contenedor menu__contenedor--primero">
                <img id="entradas" class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
                <h3 class="menu__titulo menu__titulo--derecha menu__titulo--entradas">Entradas</h3>
            </div>
            <div class="menu__contenedor ">
                <h3 class="menu__titulo menu__titulo--izquierda menu__titulo--parrilladas">Parrilladas</h3>
                <img class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
            </div>
            <div class="menu__contenedor ">
                <img class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
                <h3 class="menu__titulo menu__titulo--derecha menu__titulo--fuertes">Fuertes</h3>
            </div>
            <div class="menu__contenedor ">
                <h3 class="menu__titulo menu__titulo--izquierda menu__titulo--bebidas">Postres</h3>
                <img class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
            </div>
            <div class="menu__contenedor ">
                <img class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
                <h3 class="menu__titulo menu__titulo--derecha menu__titulo--bebidas">Bebidas Calientes</h3>
            </div>
            <div class="menu__contenedor ">
                <h3 class="menu__titulo menu__titulo--izquierda menu__titulo--bebidas">Bebidas</h3>
                <img class="menu__imagen" src="/static/img/nachos.png" alt="entradas el solar" />
            </div>
        </div>
    </article>
    <article class="contacto" id="contacto">
        <h2>Contácto</h2>
        <div class="contacto__contenido">
            <div class="contacto__columna">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.66618608344!2d-74.06344188523785!3d4.653487596619667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a445bf69f69%3A0x49cef5fe1fd222e9!2sEl+Solar+Patio+Caf%C3%A9!5e0!3m2!1ses!2sco!4v1559674458899!5m2!1ses!2sco" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <form action="alejita.camelo@hotmail.com" method="POST" class="contacto__columna">
                <div class="contacto__campo">

                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Nombre" />

                </div>
                <div class="contacto__campo">
                    <label for="mail"></label>
                    <input type="email" id="mail" placeholder="Correo" />
                </div>
                <div class="contacto__campo">
                    <label for="msg"></label>
                    <textarea id="msg" placeholder="Mensaje"></textarea>
                </div>

                <div class="button contacto__campo">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
        </div>
    </article>
</main>

<?php
require './pages/lib/footer.php';
?>

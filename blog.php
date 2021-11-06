<?php 
    include 'assets/templates/header.php';
?>

<!--BUSCADOR MOBILE -->

<div class="buscador buscador--mobile" data-aos="fade-up" data-aos-duration="1000">
    <div class="buscador__contenedor">
        <input type="search" class="buscador__buscar">
        <label class="buscador__texto">Buscar noticia</label>
        <img class="buscador__icono"src="assets/images/search.svg">
    </div>
    <div class="categorias">
        <select class="categorias__select">
            <option class="categorias__option">
                Todas las categorías
            </option>
            <option class="categorias__option">
                Desayuno
            </option>
            <option class="categorias__option">
                Almuerzo
            </option>
            <option class="categorias__option">
                Cena
            </option>
        </select>
        <img src="assets/images/down.svg" class="categorias__icono">
    </div>
</div>

<section class="blog">
    <div class="blog__contenedor-todo">
        <div class="blog__contenedor-articulos">
            <div class="blog__articulos">
                <img src="assets/images/blog-1.png" alt="" class="blog__imagen" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="blog__subtitulo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h2>
                <p class="blog__parrafo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem modi officiis dolorum rem, ut odio provident architecto reiciendis dolore distinctio sunt voluptate eveniet! Inventore nam, quas necessitatibus eos illum laboriosam.
                </p>
                <a href="" class="blog__link" data-aos="fade-up" data-aos-duration="1000">
                    Leer más
                </a>
                <div class="boton__contenedor boton__contenedor--blog" data-aos="fade-up" data-aos-duration="1000">
                    <button class="boton boton--recetas">
                        <a class="boton__link">Ver más</a>    
                    </button>
                </div>
            </div>
            <div class="blog__articulos">
                <img src="assets/images/blog-2.png" alt="" class="blog__imagen" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="blog__subtitulo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h2>
                <p class="blog__parrafo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem modi officiis dolorum rem, ut odio provident architecto reiciendis dolore distinctio sunt voluptate eveniet! Inventore nam, quas necessitatibus eos illum laboriosam.
                </p>
                <a href="" class="blog__link" data-aos="fade-up" data-aos-duration="1000">
                    Leer más
                </a>
                <div class="boton__contenedor boton__contenedor--blog" data-aos="fade-up" data-aos-duration="1000">
                    <button class="boton boton--recetas">
                        <a class="boton__link">Ver más</a>    
                    </button>
                </div>
            </div>
            <div class="blog__articulos">
                <img src="assets/images/blog-3.png" alt="" class="blog__imagen" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="blog__subtitulo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h2>
                <p class="blog__parrafo" data-aos="fade-up" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem modi officiis dolorum rem, ut odio provident architecto reiciendis dolore distinctio sunt voluptate eveniet! Inventore nam, quas necessitatibus eos illum laboriosam.
                </p>
                <a href="" class="blog__link" data-aos="fade-up" data-aos-duration="1000">
                    Leer más
                </a>
                <div class="boton__contenedor boton__contenedor--blog" data-aos="fade-up" data-aos-duration="1000">
                    <button class="boton boton--recetas">
                        <a class="boton__link">Ver más</a>    
                    </button>
                </div>
            </div>
        </div>
        <aside class="blog-aside">
            <div class="blog-aside__categorias">
                <h2 class="blog-aside__titulo">Categorías</h2>
                <p class="blog-aside__parrafo">Todas las categorías</p>
                <p class="blog-aside__parrafo">Todas las categorías</p>
                <p class="blog-aside__parrafo">Todas las categorías</p>
                <p class="blog-aside__parrafo">Todas las categorías</p>
                <p class="blog-aside__parrafo">Todas las categorías</p>
            </div>
            <div class="blog-aside__recetas">
                <h2 class="blog-aside__titulo blog-aside__subtitulo">Últimas recetas</h2>
                <div class="card card--color card--width">
                    <a href="./recetas.php" class="card__contenedor-imagen">
                        <img src="assets/images/desayuno.png" alt="" class="card__imagen-receta">
                    </a>
                    <div class="card__contenedor-contenido card__contenedor-contenido--bottom">
                        <h2 class="card__subtitulo card__subtitulo--color">Lorem, ipsum dolor.</h2>
                    </div>
                    <div class="card__contenedor-titulo card__contenedor-titulo--left">
                        <img src="assets/images/coffee-white.svg" alt="" class="card__icono">
                        <p class="card__titulo card__titulo card__titulo--color">Desayuno</p>
                    </div>
                </div>
                <div class="card card--color card--width">
                    <a href="./recetas.php" class="card__contenedor-imagen">
                        <img src="assets/images/almuerzo.png" alt="" class="card__imagen-receta">
                    </a>
                    <div class="card__contenedor-contenido card__contenedor-contenido--bottom">
                        <h2 class="card__subtitulo card__subtitulo--color">Lorem, ipsum dolor.</h2>
                    </div>
                    <div class="card__contenedor-titulo card__contenedor-titulo--left">
                        <img src="assets/images/sun-white.svg" alt="" class="card__icono">
                        <p class="card__titulo card__titulo card__titulo--color">Almuerzo</p>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>


<?php
include 'assets/templates/footer.php';
?>
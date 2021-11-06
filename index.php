<?php 
    include 'assets/templates/header.php';
?>

  <!-- Section Slider -->  

 <div class="carousel" data-aos="fade-up" data-aos-duration="1000">
    <div class="carousel__contenedor">
        <button aria-label="Anterior" class="carousel__anterior">
            <i class="fas fa-chevron-left"></i>
        </button>
        <div class="carousel__lista glider" id="glider">
            <div class="carousel__elemento">
                <img class="carousel__imagen" src="assets/images/slider-image.jpg" alt="">
                <button class="boton">
                    <a class="boton__link">VER MÁS</a>    
                </button>
            </div>
            <div class="carousel__elemento">
                <img class="carousel__imagen" src="assets/images/slider-image.jpg" alt="">
                <button class="boton">
                    <a class="boton__link">VER MÁS</a>    
                </button>
            </div>
        </div>
        <button aria-label="Siguiente" class="carousel__siguiente">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <div role="tablist" class="carousel__indicadores"></div>
</div>

  <!-- Section recetas -->

<section class="recetas">
    <div class="recetas__contenedor">
        <div class="title"  data-aos="fade-up" data-aos-duration="1000">
            <h2 class="title__contenido">
                Nuevas Recetas
            </h2>
        </div>
        <div class="carousel__recetas">
            <button aria-label="Anterior" class="carousel__anterior--recetas">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="card__contenedor-principal carousel__lista--recetas">
                <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                    <div class="card__contenedor-imagen">
                        <img src="assets/images/desayuno.png" alt="" class="card__imagen-receta">
                    </div>
                    <div class="card__contenedor-titulo">
                        <img src="assets/images/coffee.svg" alt="" class="card__icono">
                        <p class="card__titulo">Desayuno</p>
                    </div>
                    <div class="card__contenedor-contenido">
                        <h2 class="card__subtitulo">Lorem, ipsum dolor.</h2>
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rerum voluptas natus adipisci molestiae voluptates excepturi sequi hic eaque cum. Quis expedita nemo iure, fuga deleniti asperiores aperiam provident voluptas.</p>
                    </div>
                </div>
                <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                    <div class="card__contenedor-imagen">
                        <img src="assets/images/almuerzo.png" alt="" class="card__imagen-receta">
                    </div>
                    <div class="card__contenedor-titulo">
                        <img src="assets/images/sun.svg" alt="" class="card__icono">
                        <p class="card__titulo">Almuerzo</p>
                    </div>
                    <div class="card__contenedor-contenido">
                        <h2 class="card__subtitulo">Lorem, ipsum dolor.</h2>
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rerum voluptas natus adipisci molestiae voluptates excepturi sequi hic eaque cum. Quis expedita nemo iure, fuga deleniti asperiores aperiam provident voluptas.</p>
                    </div>
                </div>
                <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                    <div class="card__contenedor-imagen">
                        <img src="assets/images/cena.png" alt="" class="card__imagen-receta">
                    </div>
                    <div class="card__contenedor-titulo">
                        <img src="assets/images/moon.svg" alt="" class="card__icono">
                        <p class="card__titulo">Cena</p>
                    </div>
                    <div class="card__contenedor-contenido">
                        <h2 class="card__subtitulo">Lorem, ipsum dolor.</h2>
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rerum voluptas natus adipisci molestiae voluptates excepturi sequi hic eaque cum. Quis expedita nemo iure, fuga deleniti asperiores aperiam provident voluptas.</p>
                    </div>
                </div>
            </div>
            <button aria-label="Siguiente" class="carousel__siguiente--recetas">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
            <div role="tablist" class="carousel__indicadores--recetas"></div>

        <div class="boton__contenedor" data-aos="fade-up" data-aos-duration="4000">
            <button class="boton boton--relative">
                <a href="./recetas.php" class="boton__link">VER MÁS</a>    
            </button>
        </div>
    </div>
</section>

<!-- Seccion Noticias -->

<section class="noticias">
    <div class="noticias__contenedor">
        <div class="title" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="title__contenido title__contenido--color">
                Noticias
            </h2>
        </div>
        <div class="noticias__contenedor-articulos">
            <a class="noticias__contenedor-grande" data-aos="fade-up" data-aos-duration="1000">
                <img src="assets/images/articulo-1.png" class="noticias__imagen">
                <p class="noticias__parrafo">Lorem ipsum dolor sit.</p>
            </a>
              <div class="noticias__contenedor-pequeño" data-aos="fade-up" data-aos-duration="1000">
                <a class="noticias__articulo">
                    <img src="assets/images/articulo-2.png" class="noticias__imagen noticias__imagen--heigth">
                    <p class="noticias__parrafo noticias__parrafo--color">Lorem ipsum dolor sit amet consectetur.</p>
                </a>
                <a class="noticias__articulo" data-aos="fade-up" data-aos-duration="1000">
                    <img src="assets/images/articulo-3.png" class="noticias__imagen noticias__imagen--heigth">
                    <p class="noticias__parrafo noticias__parrafo--color">Lorem ipsum dolor sit amet consectetur.</p>
                </a>
              </div>
        </div>
    </div>
</section>

<?php
include 'assets/templates/footer.php';
?>
    
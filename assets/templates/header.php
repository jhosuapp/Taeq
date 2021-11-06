<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taeq</title>
    <link rel="shortcut icon" href="assets/images/logo.svg" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<header class="header">
    <nav class="header__ctn">
        <figure class="header__icon-ctn">
            <img class="header__icon" src="assets/images/logo.svg">
        </figure>
        <ul class="header__list">
            <a href="./index.php" class="header__items">
                Inicio
            </a>
            <a href="./recetas.php" class="header__items">
                Recetas
            </a>
            <a href="./blog.php"class="header__items">
                Blog
            </a>
            <a href="./quienes.php" class="header__items">
                ¿Quiénes somos?
            </a>
        </ul>
    </nav>

    <!-- Menu Hamburguesa -->

    <div class="main-container">
        <a class="menu__link--burger">
            <img class="menu__paragraph" src="assets/images/logo.svg" width="100px">
        </a>
        <div class="hamburger" id="hamburger">
            <button class="hamburger__button">
                <span class="hamburger__top-line"></span>
                <span class="hamburger__middle-line"></span>
                <span class="hamburger__bottom-line"></span>
            </button>
        </div>
        <div class="main-list" id="main-list">
            <a class="main-list__link" href="./index.php">
                <p class="main-list__text">
                    Inicio
                </p>
            </a>
            <a class="main-list__link" href="./recetas.php">
                <p class="main-list__text">
                    Recetas
                </p>
            </a>
            <a class="main-list__link" href="./blog.php">
                <p class="main-list__text">
                    Blog
                </p>
            </a>
            <a class="main-list__link" href="#">
                <p class="main-list__text">
                    ¿Quiénes somos?
                </p>
            </a>
        </div>
    </div>
</header>

<body>
    <img class="background-image" src="assets/images/Fondo.png">

    <!-- scripts y librerias -->

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/js/mainscript.js"></script>
</body>
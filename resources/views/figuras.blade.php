<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Estilos generales */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            /* justify-content: space-between; */
        }

        /* Estilos del encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            width: 100%;
            top: 0;
            align: icon;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .navegar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .titulo-inicio {
            color: #fff;
            text-decoration: none;
        }

        /*fondos de los productos*/
        .iconos {
            display: inline;
            justify-content: end;
        }
        .fnd1 {
            background-image: url(https://i.pinimg.com/564x/54/0d/30/540d30e80abd4e5a4478e1c6897c390d.jpg);
            background-position: 100%;
            /* opacity: 10%; */
        }

        .fnd2 {
            background-image: url(https://i.pinimg.com/736x/55/ad/08/55ad089ed83b4b6b1fe473d818d09df4.jpg);
            background-position: 100%;
        }

        .fnd3 {
            background-image: url(https://i.pinimg.com/564x/e7/76/e9/e776e9579a0cd27d689868c5d7072f88.jpg);
            background-position: 100%;
        }

        .fnd4 {
            background-image: url(https://i.pinimg.com/564x/d8/f7/2c/d8f72c47ece5247b7197196a7c80a1dc.jpg);
            background-position: 100%;
        }
        .fnd5 {
            background-image: url(https://i.pinimg.com/564x/e4/6a/d0/e46ad05fd67f1403dcdcd935a75b3251.jpg);
            background-position: 100%;
        }
        /* Estilos de la sección de descripción */
        .descripcion {
            padding: 17px 0;
            text-align: center;
            /* height: calc(100vh - 130px); 130px es la altura aproximada del encabezado y el pie de página */
        }

        .servicios-container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        
        .servicio {
            width: 13.6%; /* El 20px es para el gap entre elementos */
            height: 300px; /* Ajusta la altura según tus necesidades */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
            overflow: hidden; /* Oculta cualquier contenido que se extienda más allá del tamaño del contenedor */
            transition: transform 0.3s ease; /* Agrega transición al hover */
            margin: 20px;
        }

        .servicio:hover {
            transform: translateY(-5px); /* Efecto de levantamiento al pasar el mouse */
        }

        .servicio img {
            width: 100%;
            height: 150px; /* Cambia esta altura según tus necesidades */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
        }

        .servicio-content {
            padding: 8px;
        }

        .servicio h3 {
            margin-top: 5px;
            font-size: 20px; /* Tamaño del título */
        }

        .servicio a {
            display: block;
        }

        .servicio p {
            margin: 5px;
            color: #666;
            font-size: 20px;
        }

        .btn-add-cart {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-add-cart:hover {
            background-color: #555;
        }


        /* Estilos del pie de página */
        footer {
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Estilos para el título de la descripción */
        .descripcion h2 {
            font-size: 32px; /* Tamaño del título */
            color: #fff; /* Color del texto */
            margin-bottom: 20px; /* Espaciado inferior */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
        }

        /* Estilos para la introducción */
        .intro {
            font-size: 18px;
            color: #fff;
            margin-top: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Añade sombra */
        }
    </style>
</head>
<body>
<header>
    <div class="navegar">
        <a class="titulo-inicio" href="{{route('welcome')}}">
            <h1>Otaku</h1>
        </a>
        <nav>
            <ul>
                <li><a href="{{route('peluches')}}">Peluches</a></li>
                <li><a href="{{route('figuras')}}">Figuras</a></li>
                <li><a href="{{route('accesorios')}}">Accesorios</a></li>
                <li><a href="{{route('ropa')}}">Ropa</a></li>
                <li><a href="{{route('mangas')}}">Mangas</a></li>
            </ul>   
        </nav>
    </div>
    <div class="iconos">
        <i class="bi bi-cart"></i>
        <i class="bi bi-0-circle"></i>
    </div>
</header>

<section id="figuras" class="descripcion fnd2">
    <div class="container">
        
        <h2>Figuras</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/b9/ad/92/b9ad92f344afe3cc57350edd8ec2cdd5.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>Zenitsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/42/97/13/429713c31a9da0b482536114a7ae50a8.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Ace</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/00/db/e9/00dbe909470fd7e76464f35abfa62110.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Zoldyck</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8a/e7/3a/8ae73a21a8a0d7f8faa7a327eeed0d43.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Luffy</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/c9/ef/02/c9ef02bf83f238a558c1443bd196ab55.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Rengoku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e9/ab/03/e9ab0331e7d1549d138e2f4e3d24336f.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Savo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8f/09/84/8f0984263be471dc15df304b125d1e40.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Usopp</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/14/68/cd/1468cd483e20a0383c04acf28cd8d36f.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Goku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/9d/41/c9/9d41c9e1c3aee11d7f50293b1b8622d2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Orochimaru</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/42/f3/42/42f342294f8ced8e93107a5670cd6501.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Katakuri</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/46/43/a3/4643a3b668dddfe01f12c7a409301dd2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Zoro</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/52/ef/66/52ef66eb0f8f53150dd2b8dba52451da.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Saitama</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>
</body>
</html>
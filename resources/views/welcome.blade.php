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
        <h1>Otaku</h1>
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
</header>


<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>
</body>
</html>
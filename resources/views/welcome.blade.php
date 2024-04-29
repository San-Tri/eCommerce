<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        /* Estilos generales */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }

        .navegar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Estilos del encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
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
        /*fondos de los productos*/
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
                <li><a href="#peluches">Peluches</a></li>
                <li><a href="#figuras">Figuras</a></li>
                <li><a href="#accesorio">Accesorios</a></li>
                <li><a href="#ropa">Ropa</a></li>
                <li><a href="#mangas">Mangas</a></li>
            </ul>   
        </nav>
    </div>
</header>

<section id="peluches" class="descripcion fnd1">
    <div class="container">
        
        <h2>Peluches</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/f0/8a/45/f08a458407df74bdd6cc258c8285d35c.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>Pochita</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/c0/51/ad/c051ad60f5a338c120b25e17381e5561.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Power</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/c2/43/24/c2432462a33a2635832ddc1fbff31d34.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Krilin</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/59/68/49/596849009dcba3a6bb994c18e84f6ed3.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Goku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/736x/20/9d/33/209d33d529c115d85cf887ca89a079ed.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Charmander</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/736x/99/ac/cb/99accb9a13cf33e02589167250879a63.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Pikachu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/df/54/7f/df547fab1af06f7c045cd3ed9577966a.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Luffy</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                <img src="https://i.pinimg.com/564x/6d/97/dc/6d97dc266685a230c97710446f37b93d.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Law</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/fe/bd/46/febd46fb3551b5a776ad3d4dcfc1fba0.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Zenitsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/d7/73/b0/d773b06b68a6acfc643bfbf6b4a8cc19.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Tanjiro</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/6a/e2/52/6ae252ab84d4e711f38bbbf9faf6ff92.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Bakugo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/fd/74/ac/fd74ac481c81bb511886b0ff99268a24.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Deku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section id="accesorio" class="descripcion fnd3">
    <div class="container">
        
        <h2>Accesorios</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/cb/92/f8/cb92f8ead398d2e5e2810c1ad8c70f4b.jpg" alt="Servicio 1">
                </a>
                <div class="servicio-content">
                    <h3>Anillo Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/be/e6/57/bee65779a6b5c7753063b9b8c37bf8c9.jpg" alt="Servicio 2">
                </a>
                <div class="servicio-content">
                    <h3>libreta death note</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/6e/da/09/6eda0974ef5f9ac0f2b24384ea842ec8.jpg" alt="Servicio 3">
                </a>
                <div class="servicio-content">
                    <h3>Alcansia Inosuke</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/d6/51/03/d65103c11255739d42c6945bc3393550.jpg" alt="Servicio 4">
                </a>
                <div class="servicio-content">
                    <h3>Taza Todoroki</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/38/9d/8d/389d8d1b79b55bb70b28d289471a9f34.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Aretes L</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/a3/44/dc/a344dca5733f24c638723ac21dc14dcf.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Anillos Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/8e/4c/d7/8e4cd7d60ea882736ab02397c19e55b0.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Collar Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/04/5b/14/045b1499da9d22c27b6b45f8c8e66e6c.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Collar one piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/b7/b7/2e/b7b72e4a19859d048fa5172432124c12.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Latas one piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/97/37/26/973726ca9f368b0eb96b82eb41d97364.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Mochila Titanes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/19/3c/b2/193cb2e357daf37c9f678999f8085a63.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Mascara Kimetsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/88/27/17/882717e0661677263db69c7e6fb1bb3a.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Case Jujusu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ropa" class="descripcion fnd4">
    <div class="container">
        
        <h2>Ropa</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                <a href="#">
                    <img src="https://th.bing.com/th/id/OIP.dlyrqZdu-stcybUJGqXgngHaDt?rs=1&pid=ImgDetMain" alt="Servicio 1">
                </a>
                <div class="servicio-content">
                    <h3>Desarrollo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://img.freepik.com/vector-premium/me-tiempo-concepto-hombre-doodle-aislado-blanco_6997-2814.jpg?w=2000" alt="Servicio 2">
                </a>
                <div class="servicio-content">
                    <h3>Hobbies</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://www.aggarwalcpa.com/uploaded_files/blog/braj_1647935906.jpg" alt="Servicio 3">
                </a>
                <div class="servicio-content">
                    <h3>Experiencia</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://rgmedia.raportuldegarda.ro/2018/01/stil-de-viata-sanatos.jpg" alt="Servicio 4">
                </a>
                <div class="servicio-content">
                    <h3>Estilo de Vida</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mangas" class="descripcion fnd5">
    <div class="container">
        
        <h2>Mangas</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                <a href="#">
                    <img src="https://th.bing.com/th/id/OIP.dlyrqZdu-stcybUJGqXgngHaDt?rs=1&pid=ImgDetMain" alt="Servicio 1">
                </a>
                <div class="servicio-content">
                    <h3>Desarrollo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://img.freepik.com/vector-premium/me-tiempo-concepto-hombre-doodle-aislado-blanco_6997-2814.jpg?w=2000" alt="Servicio 2">
                </a>
                <div class="servicio-content">
                    <h3>Hobbies</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://www.aggarwalcpa.com/uploaded_files/blog/braj_1647935906.jpg" alt="Servicio 3">
                </a>
                <div class="servicio-content">
                    <h3>Experiencia</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://rgmedia.raportuldegarda.ro/2018/01/stil-de-viata-sanatos.jpg" alt="Servicio 4">
                </a>
                <div class="servicio-content">
                    <h3>Estilo de Vida</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                <a href="#">
                    <img src="https://thumb.ac-illust.com/0d/0dac3c758fc6c09bebd303e59e3c6b02_w.jpeg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Viajes</h3>
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
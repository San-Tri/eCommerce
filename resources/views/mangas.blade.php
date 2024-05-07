<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{ asset('css/producto.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

    <div class="search">
        <i class="bi bi-search"></i>
        <input class="input" type="search">
    </div>

    <div class="iconos">
        <i class="bi bi-cart"></i>
        <i class="bi bi-0-circle-fill"></i>
    </div>
</header>

<section id="mangas" class="descripcion fnd">
    <div class="container">
        
        <div class="servicios-container">

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/cc/6a/04/cc6a04585fdb13da359e75bfb87b3be6.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>One piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/73/8e/f1/738ef1a834d55f133284591faeded531.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Boku no hero</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/2c/60/39/2c60392e730a460a5e87164594ab0832.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Death Note</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/7b/24/81/7b24816a9f9c42745a8c42e90bbf04c2.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Jojo´s</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/0e/b3/b2/0eb3b2ea3aa3beed5355e4d8a4a5cb3b.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Dragon Ball</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8b/c3/a8/8bc3a86aa54248ee1776152a9c92d46c.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/78/9f/66/789f6614b5d45522e3b614d1e252c2b0.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Evangelion</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/1f/85/3d/1f853d3884fe244104ebf2af8d9992c6.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Kimetsu no Yaiba</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e3/b2/65/e3b265463c6d5a1f26ddd4d4f2fde85b.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Tokyo Ghoul</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/8d/0a/a2/8d0aa2607c21ce45625bfc3b07e43692.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Jujutsu Kaisen</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/63/12/09/631209232adab7b7d7daee3e90dc4d86.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Chaisaw menS</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/9a/24/89/9a2489698d2ecc0f1d338a923dbebb13.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Tokio Revenger</h3>
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
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
    <div class="iconos">
        <i class="bi bi-cart"></i>
        <i class="bi bi-0-circle"></i>
    </div>
</header>

<section id="ropa" class="descripcion fnd4">
    <div class="container">
        
        <h2>Ropa</h2>
        <p class="intro">
            Peluches de todo tipo de anime, usted solo pida y se lo fabricamos, rapido rapidin.
        </p>
        
        <div class="servicios-container">

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/d9/a7/26/d9a72697c064d86d2457bcca844669b5.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>Polera Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/96/c0/4d/96c04d362bd65e7eafbd9dab4d42d9d6.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Polera one piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/b7/21/58/b721589a7e97493781cd87cd44254e09.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Zapatilla Boku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/df/57/76/df577612a8b0e5760ae67c72f7714920.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Zapatilla Kimetsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/1e/a5/db/1ea5db5c75944ed01a148b8475533993.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Polo Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/82/c9/de/82c9deecffc8ed6162cbb2fbfc2ab814.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Polo Bakugo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/4c/8a/9e/4c8a9e97a36d2c7554f3569709a74fd7.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Polo Deku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/b9/3f/7a/b93f7afc2f5521dcaa96e242bd9ef630.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Polera Law</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/85/27/51/8527516ac40bd58fb3d49169964f8f6e.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Gorra Choper</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e0/7c/95/e07c95900a4b05abd0997e5023933b60.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Sombrero Ace</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/73/a4/76/73a476353aadeeb8070ec9d9a373a95b.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Gorra Luffy</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/39/15/72/391572727b55d024dda4587148e8affa.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Gorra Goku</h3>
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
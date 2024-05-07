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

<section id="accesorio" class="descripcion fnd">
    <div class="container">
        
        <div class="servicios-container">

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/cb/92/f8/cb92f8ead398d2e5e2810c1ad8c70f4b.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>Anillo Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/be/e6/57/bee65779a6b5c7753063b9b8c37bf8c9.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>libreta death note</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/6e/da/09/6eda0974ef5f9ac0f2b24384ea842ec8.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Alcansia Inosuke</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/d6/51/03/d65103c11255739d42c6945bc3393550.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Taza Todoroki</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/38/9d/8d/389d8d1b79b55bb70b28d289471a9f34.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Aretes L</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/a3/44/dc/a344dca5733f24c638723ac21dc14dcf.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Anillos Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8e/4c/d7/8e4cd7d60ea882736ab02397c19e55b0.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Collar Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/04/5b/14/045b1499da9d22c27b6b45f8c8e66e6c.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Collar one piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/b7/b7/2e/b7b72e4a19859d048fa5172432124c12.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Latas one piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/97/37/26/973726ca9f368b0eb96b82eb41d97364.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Mochila Titanes</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/19/3c/b2/193cb2e357daf37c9f678999f8085a63.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Mascara Kimetsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart">agregar al carrito</button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/88/27/17/882717e0661677263db69c7e6fb1bb3a.jpg" alt="Servicio 5">
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

<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>
</body>
</html>
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

<section id="peluches" class="descripcion fnd">
    <div class="container">
        
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

<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>
</body>
</html>
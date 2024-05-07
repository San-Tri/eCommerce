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
        <input class="input" type="search" placeholder="Buscar...">
        <button><i class="bi bi-search"></i></button>
    </div>
    
    <div class="iconos">
        <i class="bi bi-cart"></i>
        <i class="bi bi-person"></i>
        <i class="bi bi-0-circle-fill"></i>
    </div>
</header>

<section id="figuras" class="descripcion fnd">
    <div class="container">
        
        <div class="servicios-container">

            <div class="servicio">
                <img src="https://i.pinimg.com/564x/b9/ad/92/b9ad92f344afe3cc57350edd8ec2cdd5.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>Zenitsu</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/42/97/13/429713c31a9da0b482536114a7ae50a8.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Ace</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/00/db/e9/00dbe909470fd7e76464f35abfa62110.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Zoldyck</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8a/e7/3a/8ae73a21a8a0d7f8faa7a327eeed0d43.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Luffy</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/c9/ef/02/c9ef02bf83f238a558c1443bd196ab55.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Rengoku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e9/ab/03/e9ab0331e7d1549d138e2f4e3d24336f.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Savo</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8f/09/84/8f0984263be471dc15df304b125d1e40.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Usopp</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/14/68/cd/1468cd483e20a0383c04acf28cd8d36f.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Goku</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/9d/41/c9/9d41c9e1c3aee11d7f50293b1b8622d2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Orochimaru</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/42/f3/42/42f342294f8ced8e93107a5670cd6501.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Katakuri</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/46/43/a3/4643a3b668dddfe01f12c7a409301dd2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Zoro</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/52/ef/66/52ef66eb0f8f53150dd2b8dba52451da.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Saitama</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
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
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
        <input class="input" type="search" placeholder="   Buscar...">
        <button class="buscar">
            <i class="bi bi-search"></i>
        </button>
    </div>

    <div class="iconos">

        <div class="contenedor-carrito-icono">
            <button class="scroll">
                <i class="bi bi-cart"></i>
            </button>
            <span class="contador">0</span>
        </div>

        <button id="icono-usuario" class="scroll">
            <i class="bi bi-person"></i>
        </button>

    </div>

    <!--ejemplo productos en el carrito-->
    <div class="contenedor-carrito ocultar-carrito">
        <div class="lista-producto ocultar">
            <div class="carrito-producto">
                <!-- <div class="info-producto">
                    <span class="cantidad-producto">1</span>
                    <p class="producto-carrito">Pochita</p>
                    <span class="precio">$ 49.99</span>
                </div> -->
                <button class="boton-x">
                    <i class="bi bi-x"></i>
                </button>
            </div>
        </div>
        <div class="precio-total">
            <h3>Total:</h3>
            <span class="total-pagar">$0</span>
        </div>
        <p class="carrito-vacio">El carrito esta vacío</p>
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
                    <p>$  19.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/00/db/e9/00dbe909470fd7e76464f35abfa62110.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Zoldyck</h3>
                    <p>$  39.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8a/e7/3a/8ae73a21a8a0d7f8faa7a327eeed0d43.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Luffy</h3>
                    <p>$  29.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/c9/ef/02/c9ef02bf83f238a558c1443bd196ab55.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Rengoku</h3>
                    <p>$  59.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e9/ab/03/e9ab0331e7d1549d138e2f4e3d24336f.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Savo</h3>
                    <p>$  19.99</p>
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
                    <p>$  29.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/9d/41/c9/9d41c9e1c3aee11d7f50293b1b8622d2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Orochimaru</h3>
                    <p>$  19.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/42/f3/42/42f342294f8ced8e93107a5670cd6501.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Katakuri</h3>
                    <p>$  59.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/46/43/a3/4643a3b668dddfe01f12c7a409301dd2.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Zoro</h3>
                    <p>$  29.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/52/ef/66/52ef66eb0f8f53150dd2b8dba52451da.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Saitama</h3>
                    <p>$  39.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="formularioRegistro" class="registro">
    <h2>Inicio de seccion</h2>
    <form action="" method="post">
        <label for="nombre">Usuario:</label>
        <input type="text" name="nombre" placeholder="  User..." required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="  Email..." required><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasena" placeholder="  Password..." required><br>
        
        <input type="submit" value="Registrar"><br>
    </form>
</div>

<footer>
    <div class="container-f">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const iconoUsuario = document.getElementById("icono-usuario");

    iconoUsuario.addEventListener("click", function() {
        mostrarFormulario();
    });

    function mostrarFormulario() {
        const formulario = document.getElementById("formularioRegistro");
        formulario.style.display = (formulario.style.display === "block") ? "none" : "block";
    }
});

const btnCart = document.querySelector('.contenedor-carrito-icono');
const containerCartProducts = document.querySelector('.contenedor-carrito');

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('ocultar-carrito');
});

const productsList = document.querySelector('.servicios-container');
let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');
const countProducts = document.querySelector('.contador');
const cartEmpty = document.querySelector('.carrito-vacio');
const cartTotal = document.querySelector('.precio-total');

productsList.addEventListener('click', e => {
    if (e.target.classList.contains('btn-add-cart')) {
        const product = e.target.closest('.servicio').querySelector('.servicio-content');
        const infoProduct = {
            quantity: 1,
            title: product.querySelector('h3').textContent,
            price: product.querySelector('p').textContent,
        };

        const exists = allProducts.some(product => product.title === infoProduct.title);

        if (exists) {
            allProducts = allProducts.map(product => {
                if (product.title === infoProduct.title) {
                    product.quantity++;
                }
                return product;
            });
        } else {
            allProducts.push(infoProduct);
        }

        showHTML();
    }
});

const rowProduct = document.querySelector('.lista-producto');

rowProduct.addEventListener('click', e => {
    if (e.target.classList.contains('boton-x')) {
        const title = e.target.closest('.carrito-producto').querySelector('.producto-carrito').textContent;

        allProducts = allProducts.filter(product => product.title !== title);

        showHTML();
    }
});

const showHTML = () => {
    if (!allProducts.length) {
        cartEmpty.style.display = 'block';
        rowProduct.style.display = 'none';
        cartTotal.style.display = 'none';
    } else {
        cartEmpty.style.display = 'none';
        rowProduct.style.display = 'block';
        cartTotal.style.display = 'block';
    }

    rowProduct.innerHTML = '';

    let total = 0;
    let totalOfProducts = 0;

    allProducts.forEach(product => {
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('carrito-producto');

        containerProduct.innerHTML = `
            <div class="info-producto">
                <span class="cantidad-producto">${product.quantity}</span>
                <p class="producto-carrito">${product.title}</p>
                <span class="precio">${product.price}</span>
            </div>
            <button class="boton-x">
                <i class="bi bi-x"></i>
            </button>
        `;

        rowProduct.append(containerProduct);

        total += parseInt(product.quantity) * parseFloat(product.price.replace('$', ''));
        totalOfProducts += product.quantity;
    });

    valorTotal.textContent = `$${total.toFixed(2)}`;
    countProducts.textContent = totalOfProducts;
};

</script>
</body>
</html>
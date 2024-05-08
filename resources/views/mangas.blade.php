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

<section id="mangas" class="descripcion fnd">
    <div class="container">
        
        <div class="servicios-container">

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/cc/6a/04/cc6a04585fdb13da359e75bfb87b3be6.jpg" alt="Servicio 1">
                <div class="servicio-content">
                    <h3>One piece</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/73/8e/f1/738ef1a834d55f133284591faeded531.jpg" alt="Servicio 2">
                <div class="servicio-content">
                    <h3>Boku no hero</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/2c/60/39/2c60392e730a460a5e87164594ab0832.jpg" alt="Servicio 3">
                <div class="servicio-content">
                    <h3>Death Note</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/7b/24/81/7b24816a9f9c42745a8c42e90bbf04c2.jpg" alt="Servicio 4">
                <div class="servicio-content">
                    <h3>Jojo´s</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/0e/b3/b2/0eb3b2ea3aa3beed5355e4d8a4a5cb3b.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Dragon Ball</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/8b/c3/a8/8bc3a86aa54248ee1776152a9c92d46c.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Naruto</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/78/9f/66/789f6614b5d45522e3b614d1e252c2b0.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Evangelion</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>
            
            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/1f/85/3d/1f853d3884fe244104ebf2af8d9992c6.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Kimetsu no Yaiba</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/e3/b2/65/e3b265463c6d5a1f26ddd4d4f2fde85b.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Tokyo Ghoul</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/736x/8d/0a/a2/8d0aa2607c21ce45625bfc3b07e43692.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Jujutsu Kaisen</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/63/12/09/631209232adab7b7d7daee3e90dc4d86.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Chaisaw menS</h3>
                    <p>$  49.99</p>
                        <br>
                        <button class="btn-add-cart"><i class="bi bi-cart-plus"></i></button>
                </div>
            </div>

            <div class="servicio">
                    <img src="https://i.pinimg.com/564x/9a/24/89/9a2489698d2ecc0f1d338a923dbebb13.jpg" alt="Servicio 5">
                <div class="servicio-content">
                    <h3>Tokio Revenger</h3>
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
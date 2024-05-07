<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

<div class="contenedor">
    <div class="card">
        <img class="fondo" src="https://i.pinimg.com/736x/82/be/59/82be59e2305a0841dc023ffa919f30de.jpg" alt="">
        <div class="contenido-card">
            <div class="perfil-imagen">
                <a href="{{route('peluches')}}"><i class="bi bi-bag"></i></a>
            </div>
            <h3 class="titulo">PELUCHES</h3>
        </div>
        <div class="telon"></div>
    </div>

    <div class="card">
        <img class="fondo" src="https://i.pinimg.com/564x/75/b6/69/75b669a747c2a7aab390a5dda99635e5.jpg" alt="">
        <div class="contenido-card">
            <div class="perfil-imagen">
                <a href="{{route('figuras')}}"><i class="bi bi-bag"></i></a>
            </div>
            <h3 class="titulo">FIGURAS</h3>
        </div>
        <div class="telon"></div>
    </div>

    <div class="card">
        <img class="fondo" src="https://i.pinimg.com/564x/62/da/f3/62daf317ec3c6fb8e096ff9ce83243de.jpg" alt="">
        <div class="contenido-card">
            <div class="perfil-imagen">
                <a href="{{route('accesorios')}}"><i class="bi bi-bag"></i></a>
            </div>
            <h3 class="titulo">ACCESORIOS</h3>
        </div>
        <div class="telon"></div>
    </div>

    <div class="card">
        <img class="fondo" src="https://i.pinimg.com/564x/54/0d/30/540d30e80abd4e5a4478e1c6897c390d.jpg" alt="">
        <div class="contenido-card">
            <div class="perfil-imagen">
                <a href="{{route('ropa')}}"><i class="bi bi-bag"></i></a>
            </div>
            <h3 class="titulo">ROPA</h3>
        </div>
        <div class="telon"></div>
    </div>

    <div class="card">
        <img class="fondo" src="https://i.pinimg.com/564x/8a/70/df/8a70dfa83232d67bf5b20ec14ccced72.jpg" alt="">
        <div class="contenido-card">
            <div class="perfil-imagen">
                <a href="{{route('mangas')}}"><i class="bi bi-bag"></i></a>
            </div>
            <h3 class="titulo">MANGAS</h3>
        </div>
        <div class="telon"></div>
    </div>
</div>

<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>

<script type="text/javascript">
const cardsContainer = document.querySelector(".contenedor");

cardsContainer.addEventListener("click", (e) => {
  const target = e.target.closest(".card");

  if (!target) return;

  cardsContainer.querySelectorAll(".card").forEach((card) => {
    card.classList.remove("active");
  });

  target.classList.add("active");
});
</script>
</body>
</html>
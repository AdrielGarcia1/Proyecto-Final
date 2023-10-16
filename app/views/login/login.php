<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../resources/css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo de la tienda">
        </div>
        <div class="search">
            <input type="text" placeholder="Buscar productos">
            <button type="submit">Buscar</button>
        </div>
        <div class="icons">
            <a href="#"><img src="user-icon.png" alt="Icono de usuario"></a>
            <a href="#"><img src="cart-icon.png" alt="Icono de carrito"></a>
        </div>
    </header>
        <nav>
        <ul>
            <li><a href="#">Opción 1</a></li>
            <li><a href="#">Opción 2</a></li>
            <li><a href="#">Opción 3</a></li>
            <li><a href="#">Opción 4</a></li>
            <li><a href="#">Opción 5</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Iniciar Sesión</h2>                         
                        <form method="POST" action="">                         
                            <div class="form-group">
                                <h5 class="text-dark" for="username">Nombre de Usuario</h5>
                                <input type="text" class="form-control" id="username" name="username" value="" placeholder="Ingresa tu nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <h5 class="text-dark" for="password">Contraseña</h5>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="form-group m-2">
                                <button type="submit"  class="btn-ingresar">Ingresar</button>
                            </div>
                            <p class="text-center text-dark"><a href="">¿Olvidaste tu contraseña?</a></p>
                            <p  class="text-center text-dark">¿No tienes una cuenta? <a href="">Regístrate</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
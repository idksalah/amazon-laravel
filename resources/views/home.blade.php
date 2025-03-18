<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-shopping-cart me-2"></i>Amazon T</a>
            
            <form class="d-flex mx-auto" style="width: 40%;">
                <input class="form-control me-2" type="search" placeholder="Buscar productos...">
                <button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
            </form>
            
            <div class="d-flex">
                <div class="dropdown me-3">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Categorías
                    </button>
                </div>
                <a href="#" class="btn btn-dark me-2"><i class="fas fa-shopping-cart"></i> Carrito</a>
                <a href="#" class="btn btn-dark"><i class="fas fa-user"></i> Iniciar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <div class="list-group-item active">Categorías</div>
                    <a href="#" class="list-group-item list-group-item-action">Electrónica</a>
                    <a href="#" class="list-group-item list-group-item-action">Ropa</a>
                    <a href="#" class="list-group-item list-group-item-action">Hogar</a>
                    <a href="#" class="list-group-item list-group-item-action">Deportes</a>
                    <a href="#" class="list-group-item list-group-item-action">Libros</a>
                </div>
            </div>
            <div class="col-md-9">
                <h2>Productos Destacados</h2>
                <div class="row g-4 mt-2">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">$99.99</p>
                                <button class="btn btn-primary">Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Producto 2</h5>
                                <p class="card-text">$149.99</p>
                                <button class="btn btn-primary">Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Producto 3</h5>
                                <p class="card-text">$199.99</p>
                                <button class="btn btn-primary">Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light fixed-bottom py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small>&copy; 2024 Amazon T. Todos los derechos reservados.</small>
                </div>
                <div class="col-md-6 text-end">
                    <small>
                        <a href="#" class="text-light text-decoration-none me-3">Términos y condiciones</a>
                        <a href="#" class="text-light text-decoration-none">Política de privacidad</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
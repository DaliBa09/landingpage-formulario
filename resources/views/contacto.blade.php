<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Formulario</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container" style="background-color: #EEEEEE;">
            <a class="navbar-brand text-uppercase text-dark fw-bold d-lg-none" href="/bienvenido">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" maria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-dark text-uppercase" href="/bienvenido">Inicio</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-dark text-uppercase" href="/contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card md-3 mx-auto" style="max-width: 540px;">
		<div class="row no-gutters align-middle">
			<div class="col align-middle">
				<div class="card-body">
					<h5 class="card-title">Contacto</h5>
					<form action="login.php" method="POST">
						<div class="form-group">
                            @if(!empty($lleno))
                            @endif
							<label for="nombre">Ingresa tu nombre</label>
							<input type="text" required name="nombre" value="{{ $persona }}" class="form-control">
							<label for="correo">Ingersa tu correo</label>
							<input type="email" required name="correo" value="{{ $correo }}" class="form-control">
                            <label for="codigo">Codigo de alumno</label>
                            <input type="number" name="codigo" class="form-control">
                            <label for="comentario">Agrega un comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
						</div>
						<br>
                        <button class="btn btn-primary" type="submit" value="Ingresar">Registrar</button>
					</form>		
                </div>
            </div>
        </div>
    </div>
</body>
</html>
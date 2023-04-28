<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta02 - Bienvenido</title>
    <link rel="stylesheet" href="css/pregunta2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-6 col-md-12 col-lg-12 mt-5">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Datos ingresados</div>
                    </div>
                    <div class="card-body">
                        <p>!Hola <?php echo $_POST['usuario']; ?>¡</p>
                        <p>Tu dirección es <?php echo $_POST['direccion']; ?></p>
                        <p>Tienes <?php echo $_POST['edad']; ?> y tu correo es <?php echo $_POST['e-mail']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
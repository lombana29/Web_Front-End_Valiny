@{
    Layout = null; // Indica que esta vista no utiliza un diseño principal
}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Ingreso.css">
    <title>Ingreso - DEVIU SYSTEM</title>
</head>
<body class="registro"> 
    <div class="form-structor">
        <div class="signup">
            <div class="logo-container">
                <img src="../../images/logo.jpg" alt="Logo de DEVIU SYSTEM">
                <h4 class="company-name">DEVIU SYSTEM</h4>
            </div>
            
            <div class="form-holder">
                <!-- Botón para conectar -->
                <form action="sesion.php" method="POST">
                    <label for="usuario" class="input-label">USUARIO</label><br>
                    <input type="text" class="input blue-text" id="usuario" placeholder="Ingrese su usuario" name="ID_Admin" required/><br>
                    
                    <label for="contrasena" class="input-label">CONTRASEÑA</label><br>
                    <input type="password" class="input blue-text" id="contrasena" placeholder="Ingrese su contraseña" name="Contrasenia" required/><br>
                    
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-md-right">
                            <a href="#">Recuperar contraseña</a>
                        </div>
                    </div>
                    
                    <br>
                    <button type="submit" class="submit-btn">INGRESAR</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>

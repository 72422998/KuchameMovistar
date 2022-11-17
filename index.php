<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title > Login </title>
    <link rel = " stylesheet " href = "../estilos/EstilosLogin.css" >
    <link rel="icon" href="../IMG/Icono_movistar.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <form id="Form_Login">
        <h1 class="title">Cuchame Movistar</h1>
        <label for="">
            <i class="fa-solid fa-user"></i>
            <input placeholder="Usuario" type="text" id="username">
        </label>
        <label for="">
            <i class="fa-solid fa-lock"></i>
            <input placeholder="Contraseña" type="password" id="password">
        </label>
        <a href="RegistroLogin.html" class="link">Registrarse</a>
        <button type="submit" id="button">Iniciar sesión</button>
    </form>    
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.all.min.js"></script>
<script src="../Js/Func_Login.js"></script>
 </html>
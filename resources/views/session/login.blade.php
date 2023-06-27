<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body class="flex">
    <div class="contenido flex colum-flex">
        <div class="elipse flex">
            <img src="{{ asset('img/fa_user.png') }}" class="user" alt="">
        </div>
        <form action={{ route('login') }} method="post">
            @csrf
            <div class="contenedor-form flex colum-flex">
                <div class="formulario flex colum-flex">
                    <div class="Email flex colum-flex">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="user@example.com" class="underline-input" name="Email">
                    </div>
                    <div class="Contraseña flex colum-flex  ">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" placeholder="******" class="underline-input" name="Contraseña">
                    </div>
                    <div>
                        <label class="recuerdame" for="Recuerdame">
                            <input type="checkbox">
                            <span>Mostrar contraseña</span>
                        </label>
                    </div>
                </div>
                <div class="seccion-ingresar flex colum-flex">
                    <input type="submit" value="Ingresar" class="btn-ingresar">
                    <a href="#" class="btn-olvide">Olvide mi contraseña</a>
                </div>
                <div class="copy flex colum-flex">
                    <label for="Copyright"> Copyright &copy; - {{ date('Y') }}</label>
                    <label for="Desarrollo">Desarrallo por <span>AMV</span></label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

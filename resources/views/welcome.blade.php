<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Acuarella</title>
    <link rel="stylesheet" href="{{asset ('estilos/barra/estilos.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('estilos/barra/fonts.css')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
    <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-cross"></span>Menu</a>
    </div>
        <nav>
            <ul>
                <li><a href="{{url('/')}}"><span class="icon-home3"></span>Inicio</a></li>
                <li><a href="{{url('sucursales')}}"><span class="icon-briefcase"></span>Habitaciones</a></li>
                <li><a href="{{url('hotel')}}"><span class="icon-earth"></span>¿Quiénes somos?</a></li>
                <li><a href="#"><span class="icon-mail3"></span>Contactos</a></li>
                <li><a href="#"><span class="icon-rocket"></span>Log In</a></li>
            </ul>
        </nav>
        @yield('contenido')
    </header>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script rel="javascript"  type="text/javascript" src="estilos/barra/menu.js"></script>
</body>
</html>
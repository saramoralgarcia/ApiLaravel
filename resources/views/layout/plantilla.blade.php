<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fondo{
            background-color: #F0D8B4;
        }
        .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: tahoma, arial, helvetica;
            margin-bottom: 100px;
        }
        .imagenCabecera {
            float: right;
            padding: 30px;
            width: 150px;
        }
        .contenidoFormulario{
            width: 300px;
            margin: 0 auto;
        }
        .contenidoTabla{
            width: 500px;
            margin: 0 auto;
        }
        .pie{
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="fondo">
    <div class="cabecera">
        <img src="/images/logo.svg" class="imagenCabecera"> 
        <!-- la ruta es directamente a la carpeta /imagen laravel se encarga de hacerlo por dentro -->
        @yield('cabecera')
    </div>
    <div class="contenido">
        @yield('contenido')

    </div>
    <div class="pie">
        @yield('pie')
        Dutys Organización y Planificación de familias. Todos los derechos reservados
        <!-- este texto aparecera en todas las paginas pq esta directamente en la plantilla -->
    </div>
</body>
</html>

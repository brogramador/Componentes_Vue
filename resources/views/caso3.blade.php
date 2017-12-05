<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href=" {{asset('css/app.css')}} " rel="stylesheet">
    <!-- Styles -->

</head>
<style>
    ul li a{
        color: #000000;
        font-size: 24px;
        font-weight: bolder;
    }
</style>
<body>


<div class="container" id="app">

    <ul  class=" col-md-12 nav nav-pills bg-primary">
        <li class="col-md-2 nav-item">
            <a class="nav-link active" href="caso1">Caso 1</a>
        </li>
        <li class=" col-md-2 nav-item">
            <a class="nav-link" href="caso2">Caso 2</a>
        </li>
        <li class="col-md-2 nav-item">
            <a class="nav-link" href="caso3">Caso 3</a>
        </li>
        <li class=" col-md-2 nav-item">
            <a class="nav-link " href="caso4">Caso 4</a>
        </li>
    </ul>
    <div class="col-md-12"  style="background: #8B9FAF">
        <h1><strong> Tercer Caso </strong></h1>
        <p style="font-size: 20px; color: #000;">Elementos de Componente A, editados desde elementos De otro componente B</p>
    </div>

    <div class="col-md-12 bg-success">
        <color_caso3 v-bind:color_1="color1"
               v-bind:color_2="color2"  ></color_caso3>
    </div>

<div class="col-md-12">
    <component_b  @update_color1= "Cambiar_color1"  @update_color2= "Cambiar_color2"></component_b>
</div>
</div>


</body>
</html>

<script src=" {{ asset('js/app_caso3.js')}} "></script>

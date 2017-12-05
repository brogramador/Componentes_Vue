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
            <h1><strong> Segundo caso </strong></h1>
            <p style="font-size: 20px; color: #000;">Elementos de Componente A, editados desde elementos pertenecientes a la instancia Vue</p>
        </div>

        <div class="col-md-12 bg-success">
            <color_caso2 v-bind:color_1="color1"
                   v-bind:color_2="color2"  ></color_caso2>
        </div>


        <div class="col-md-12 bg-danger">
            <h1>instancia Vue</h1>
            <div class="col-md-12">
                <div class="form-group row">
                    <label  class="col-md-5 col-form-label" style="text-align: center">Cambiar Color 1 </label>
                    <div class="col-md-7">
                        <select v-model="color1" class="form-control col-md-6">
                            <option value="#FFFFFF" >Blanco</option>
                            <option value="#0248FC" >Azul</option>
                            <option value="#02FC10" >Verde</option>
                            <option value="#F5FC02" >Amarillo</option>
                            <option value="#FC0202" >Rojo</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group row">
                    <label  class="col-md-5 col-form-label" style="text-align: center">Cambiar Color 2 </label>
                    <div class="col-md-7">
                        <select  v-model="color2" class="form-control col-md-6">
                            <option value="#FFFFFF" >Blanco</option>
                            <option value="#0248FC" >Azul</option>
                            <option value="#02FC10" >Verde</option>
                            <option value="#F5FC02" >Amarillo</option>
                            <option value="#FC0202" >Rojo</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


    </div>


    </body>
</html>

<script src=" {{ asset('js/app_caso2.js')}} "></script>

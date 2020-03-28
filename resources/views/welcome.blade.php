<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <h1>Medicos</h1>
                <div class="row">
                    <div class="col-sm-4">
                    <form action="{{route('store')}}"  method="POST">
                        @csrf
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" id="nombre" name="nombre" required>
                            <label>Edad</label>
                            <input type="text" class="form-control input-sm" id="edad" name="edad" required>
                            <label>Especialidad</label>
                            <input type="text" class="form-control input-sm" id="especialidad" name="especialidad" required>
                            
                            <p></p>
                           <button type="submit" class="btn btn-success">Crear</button>
                        </form>



                        @if (session('store'))
                                <div class="alert alert-success mt-3" role="alert">
                                    {{session('store')}}
                                </div>
                        @endif
                    </div>
                    <div class="col-sm-8">
                         <div class="table-responsive-md">
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Especialidad</th>
                                    <th>Acciones</th>


                                
                                </tr>
                                
                                <!-- DATA MEDICOS -->
                                     @foreach ($medicos as $medico )
                                         <tr>
                                         <td>{{$medico->id}}</td>
                                             <td>{{$medico->nombre}}</td>
                                             <td>{{$medico->edad}}</td>
                                             <td>{{$medico->especialidad}}</td>
                                             <td>
                                             <a href="{{route('editar',$medico->id)}}" class="btn btn-warning" class="d-inline">Editar</a>
                                                <form action="{{route('delete',$medico->id)}}" method="POST">
                                                 @method("DELETE")
                                                 @csrf
                                                 <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                             </td>
                                         </tr>
                                     @endforeach

                                <!-- end data medicos -->
                            </table>
                            
                            @if (session('eliminar'))
                                <div class="alert alert-success mt-3" role="alert">
                                    {{session('eliminar')}}
                                </div>
                            @endif
                            {{$medicos->links()}}
                         </div>
                    </div>
                </div>
            </div>
    
            <!-- Button trigger modal -->
    
    
            <!-- Modal -->
        
        </div>
    </body>
</html>

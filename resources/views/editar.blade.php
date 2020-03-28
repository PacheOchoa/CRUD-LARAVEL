       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
       
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
    <h1>Editar Medico {{$medico->id}}</h1>
        <div class="col-sm-4">
        <form action="{{route('update',$medico->id)}}"  method="POST">
                @method('PUT')
                @csrf
                    <label>Nombre</label>
            <input type="text" class="form-control input-sm" id="nombreU"
             name="nombreU" value="{{$medico->nombre}}">
                    <label>Edad</label>
                    <input type="text" class="form-control input-sm"
                     id="edadU" name="edadU" value="{{$medico->edad}}">
                    <label>Especialidad</label>
                    <input type="text" class="form-control input-sm" 
                    id="especialidadU" name="especialidadU" value="{{$medico->especialidad}}">
                    
                    <p></p>
                   <button type="submit" class="btn btn-warning">Editar</button>
                </form>

                @if (session('update'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{session('update')}}
                        </div>
                @endif
            </div>
    </div>
</div>
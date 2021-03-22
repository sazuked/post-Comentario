<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>
@guest
    <a href="{{route('login')}}" class="btn btn-outline-dark float-left ml-3 mt-2">Logar</a>
@else
    <a href="{{route('home')}}" class="btn btn-outline-dark float-left ml-3 mt-2">Ir para home</a>
@endif
<div class="d-flex justify-content-center">
    <div class="card p-2 w-75">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">nome</th>
            <th scope="col">comenario</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ( $sql as $comet)
            <tr>
                
                <td>{{$comet->nome}}</td>
                <td>{{$comet->comentario}}</td>
                        
            </tr>
            @endforeach
        
            
        </tbody>
        </table>
    </div>
</div>

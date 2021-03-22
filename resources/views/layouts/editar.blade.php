<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<form action="{{route('updatecomet',['id'=>$editar->id])}}" method="POST">
@csrf
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">nome</span>
    </div>
    <input type="text" name='nome' value='{{$editar->nome}}' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    <input type="text" name='comentario' value='{{$editar->comentario}}' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    <button type='submit' >editar</button>
    </div>
</form>    
</body>
</html>
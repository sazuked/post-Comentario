<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<a href="{{route('home')}}" class="btn btn-outline-dark float-right ml-3 mt-2" >Ir para home</a>
    @foreach ( $sql as $comet)
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Comentario</th>
      
      
    </tr>
  </thead>
  <tr>
      
      <td>{{$comet->nome}}</td>
      <td>{{$comet->comentario}}</td>
      <td><a href="{{route('editarLog',['id'=>$comet->id])}}">editar</a><p>             </p><a href="{{route('excluir',['id'=>$comet->id])}}">excluir</a></td>
     
    </tr>


                
    @endforeach
    
    
</body>
</html>
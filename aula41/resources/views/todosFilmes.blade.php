<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href='css/app.css'>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if(isset($edicaoSucesso) && $edicaoSucesso)
      Filme atualizado com sucesso!
    @endif

    <br><br>



    @foreach($filmes as $filme)
      {{ $filme->title }} - <a href="/filme/edit/{{ $filme->id }}">Editar</a> - <a href="">Remover</a> <br>
    @endforeach

    {{$filmes->links()}}
  </body>
</html>

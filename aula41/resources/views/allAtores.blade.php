@if(isset($edicaoSucesso) && $edicaoSucesso)
  Atores atualizados com sucesso!
@endif

<br><br>



@foreach($actors as $banana)
  {{ $banana->first_name }} - <a href="/filme/edit/">Editar</a> - <a href="">Remover</a> <br>
@endforeach

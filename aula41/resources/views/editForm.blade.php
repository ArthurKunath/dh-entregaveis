@if (isset($sucesso) && $sucesso)
  Filme cadastrado com sucesso!
@endif

@if (isset($ocorreuErro) && $ocorreuErro)
  OPS! Ocorreu erro!
@endif

<form method="post" action="/filme/edit/{{ $filme->id }}">
  @csrf
  {{ method_field('put')}}
  <div class="form-group col-6 m-auto">
      <label for="title">Título</label>
      <input type="text" class="form-control" name="title" value="{{ $filme->title }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="rating">Classificação</label>
    <input type="text" class="form-control" name="rating" value="{{ $filme->rating }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="awards">Prêmios</label>
      <input type="text" class="form-control" name="awards" value="{{ $filme->awards }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="genres">Genres</label>
      <select name="genre_id">
        @foreach($genres as $genre)
          <option value="{{$genre->id}}"> {{$genre->name}} </option>
        @endforeach
      </select>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="length">Duração</label>
      <input type="text" class="form-control" name="length" value="{{ $filme->length }}"/>
  </div>

  <button type='submit'>Atualizar filme</button>
<form>

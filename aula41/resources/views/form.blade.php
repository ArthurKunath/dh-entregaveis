<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <ol>
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>

                    @endif

                    @if (isset($sucesso) && $sucesso)
                      Filme cadastrado com sucesso!
                    @endif

                    @if (isset($ocorreuErro) && $ocorreuErro)
                      OPS! Ocorreu erro!
                    @endif

                    <form method="post" action="/adicionar">
                      {{csrf_field()}}
                      <div class="form-group col-6 m-auto">
                          <label for="title">Título</label>
                          <input type="text" class="form-control" name="title" value="{{old('title')}}"/>
                      </div>
                      <div class="form-group col-6 m-auto">
                          <label for="rating">Classificação</label>
                        <input type="text" class="form-control" name="rating" value="{{old('rating')}}"/>
                      </div>
                      <div class="form-group col-6 m-auto">
                          <label for="awards">Prêmios</label>
                          <input type="text" class="form-control" name="awards" value="{{old('awards')}}"/>
                      </div>
                      <div class="form-group col-6 m-auto">
                          <label for="genres">Genres</label>
                          <input type="text" class="form-control" name="genres" value="{{ $filme->genres }}"/>
                      </div>
                      <div class="form-group col-6 m-auto">
                          <label for="length">Duração</label>
                          <input type="text" class="form-control" name="length" value="{{old('length')}}"/>
                      </div>

                      <button type='submit'>Enviar</button>
                    <form>
                  </ol>
                </div>
            </div>
        </div>
    </body>
</html>

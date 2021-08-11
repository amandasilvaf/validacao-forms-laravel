<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="{{ url(mix('bootstrap/bootstrap.css'))}}">

</head>
<body>

    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2" style="margin-top: 10px">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title text-center">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome"
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}">
                                @if($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <input class="form-control {{ $errors->has('idade') ? 'is-invalid' : ''}}" type="number" id="idade" name="idade">
                                @if($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" type="text" id="endereco" name="endereco">
                                @if($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" type="text" id="email" name="email">
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-secondary btn-sm">Cancelar</button>
                        </form>
                    </div>
            {{--  @if($errors->any())
                    <div class="card-footer">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error}}
                        </div>
                    @endforeach
                    </div>
            @endif  --}}

                </div>
            </div>
        </div>
    </main>

    {{--  $errors é um array retornado pela $request  --}}
    {{--  @if (isset($errors))
        {{ var_dump($errors)}} 
    @endif  --}}
   
    <script src="{{ url(mix('jquery/jquery.js')) }}"></script>
    <script src="{{ url(mix('bootstrap/bootstrap.js')) }}"></script>
    
   
</body>
</html>
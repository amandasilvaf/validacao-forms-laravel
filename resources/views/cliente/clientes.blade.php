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
                           <h3>Listar Clientes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="tabelaProdutos">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $c)
                                    <tr>
                                        <td>{{ $c->id}}</td>
                                        <td>{{ $c->nome}}</td>
                                        <td>{{ $c->idade}}</td>
                                        <td>{{ $c->email}}</td>
                                        <td>{{ $c->endereco}}</td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ url(mix('jquery/jquery.js')) }}"></script>
    <script src="{{ url(mix('bootstrap/bootstrap.js')) }}"></script>
    
   
</body>
</html>
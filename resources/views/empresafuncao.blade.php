<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery-2.2.4.min.js"></script>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <?php
    foreach ($errors->all() as $message) {
        echo $message;
    }
    ?>
    <form action="/empresafuncao/store" method="post">
        {{ csrf_field() }}
        <p>
        Empresa: <input type="text" name="empresa_id" value="1">
        </p>
        <p>
        Função: <input type="text" name="funcao_id" value="1">
        </p>
        <p>
            <input type="checkbox" value="true" name="liberar[]">
            <input type="text" value="{{old('nome')[0]}}" name="nome[]">
        </p>
        <p>
            <input type="checkbox" value="true" name="liberar[]">
            <input type="text" value="{{old('nome')[1]}}" name="nome[]">
        </p>
        <button>Enviar</button>
    </form>
    <br />
    <form action="/empresafuncao" method="post">
        {{ csrf_field() }}
        <input type="date" name="data">
        <button>Enviar</button>
    </form>
    <br /><br />
    <button onclick="send()">Enviar</button>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function send(){
            var id = 1;
            var qtd = 2;
            var dataUser = { "id": id, "qtd": qtd};

            $.ajax({
                type: 'POST',
                data: {'rel':dataUser},
                url: '{{route("carrinho.atualiza")}}',
                success: function (e)
                {
                    console.log(e);
                }
            });
        }
    </script>
</body>
</html>
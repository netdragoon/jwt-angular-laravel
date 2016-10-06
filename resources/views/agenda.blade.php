<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>Laravel</title>
    <body>
        <h3>Quantidade: {!! $count !!}</h3>
        <br />
        @foreach($drop as $key => $value)
            <p>{!! $key !!} - {!! $value !!}</p>
        @endforeach
    </body>
</html>
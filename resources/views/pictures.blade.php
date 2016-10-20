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
<form action="{{route('pictures.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label>Indique a Foto:
        <input type="file" name="picture" id="picture" accept="image/*"/>
    </label>
    <button>Enviar Foto</button>
</form>
</body>
</html>
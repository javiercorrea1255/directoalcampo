<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:rgb(241, 76, 76)"><b>Atención</b></h1>
    <p>Estimado instructor de Directo al Campo, lamentamos informarle que su curso <b>{{ $course->title }}</b> ha sido rechazado, por favor corrija las observaciónes que se adjuntan y vuelva a enviar el curso para su revisión</p>
    <hr>
    <h3>Detalles:</h3>
    <p>{!! $course->observation->body !!}</p>
</body>
</html>

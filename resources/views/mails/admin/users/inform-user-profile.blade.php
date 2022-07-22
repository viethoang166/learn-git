<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/template/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css”>
        <title>Intern Laravel</title>
    </head>

    <body style ="margin: 50px;">
        <div class="start-header">
            <h1>Hello, {{ $user['name']}} </h1>
            <p>This email send from system</p>
            <p>Please check your information. Is it correctly ?</p>
        </div>

        <div class="information">
            <hr>
            <p>Name : </p>
            <p>{{ $user['name']}}</p>
            <hr>
            <p>Email : </p>
            <p>{{ $user['email']}}</p>
            <hr>
            <p>Phone : </p>
            <p>{{ $user['phone']}}</p>
            <hr>
            <p>Address : </p>
            <p>{{ $user['address']}}</p>

        </div>

    </body>
</html>

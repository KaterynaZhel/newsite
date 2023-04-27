<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
       <h1>Home controller</h1>
       {!! Form::open(['url' => 'home']) !!}
       {!! Form::text('name') !!}
       {!! Form::text('lastname') !!}
       {!! Form::email('email') !!}
       {!! Form::submit('send') !!}
       {!! Form::token() !!}
        {!! Form::close() !!}
    </body>
</html>

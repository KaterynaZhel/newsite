<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
     <h1></h1>
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

     {!!Form::open(['url'=>'store'])!!}
     {!!Form::text('name')!!}
     {!!Form::text('lastname')!!}
     {!!Form::text('message')!!}
     {!!Form::submit('submit')!!}
     {!!Form::close()!!}
  
    </body>
</html>

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

     {!!Form::open(['url'=>'article'])!!}
     {!!Form::text('name')!!}
     {!!Form::text('description')!!}
     {!!Form::text('textArticle')!!}
     {!!Form::token()!!}
     {!!Form::submit('submit')!!}
     {!!Form::close()!!}
  
    </body>
</html>
<!DOCTYPE html>
<html>
<body>
@if (isset ($name))
    <div> priedas pridetas : {{ $name }}</div>
@endif
{!! Form::open(['url' => route('app.base')]) !!}
{{ Form::label('name', 'base') }}
{{ Form::text('name') }}
{{ Form::label('name', 'calories') }}
{{ Form::text('calories') }}
{{ Form::submit('submit!')}}
{!! Form::close() !!}

</body>


</html>
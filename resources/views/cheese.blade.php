<!DOCTYPE html>
<html>
<body>
@if (isset ($name))
    <div> priedas pridetas : {{ $name }}</div>
@endif
{!! Form::open(['url' => route('app.cheese')]) !!}
{{ Form::label('name', 'cheese title') }}
{{ Form::text('name') }}
{{ Form::submit('submit!')}}
{!! Form::close() !!}

</body>



</html>
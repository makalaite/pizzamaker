<!DOCTYPE html>
<html>
<body>
@if (isset ($name))
    <div> Choose your own pizza : {{ $name }}</div>
@endif
Choose your own pizza :
<br/>
{!! Form::open(['url' => route('app.pizza')]) !!}

{{ Form::label('Select a base you like: ') }}
<br/>
{{ Form::select('Pizza base ', array('P' => 'pilno grūdo miltų picos padas', 'M' => 'mielinis picos padas')) }}
<br/>
<br/>

{{ Form::label('Select a cheese you like: ') }}
<br/>
{{ Form::select('Cheese ', array('M' => 'Mocarela', 'S' => 'Šveicariškas', 'C' => 'Čederis')) }}

<br>
<div> Choose 3 ingredients: </div>
@foreach($ingredient as $key => $oneIngredient)
    <label>
        {{ Form::checkbox('ingredients[]', $key) }}
        {{$oneIngredient}}
    </label><br>
@endforeach

{{ Form::submit('submit!')}}

{!! Form::close() !!}

</body>




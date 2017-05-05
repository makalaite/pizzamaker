<!DOCTYPE html>
<html>
<body>



@if (isset ($error))
    <div style="color:red"> {{ $error['message'] }}</div>
@endif

@if (isset ($name))
    <div> Choose your own pizza : {{ $name }}</div>
@endif

Choose your own pizza :
<br/>
{!! Form::open(['url' => route('app.pizza')]) !!}

{{ Form::label('client_name', 'Your name here: ') }}
{{ Form::text('client_name', $record['client_name']) }}
<br/>

{{ Form::label('Select a base you like: ') }}
<br/> @foreach ($base as $)
        @if ($record['base'] == $key)
            {{ Form::select('base', $base, $key) }}
        @endif
@endforeach
<br/>
<br/>

{{ Form::label('Select a cheese you like: ') }}
<br/>
{{ Form::select('cheese_id', $cheese) }}

<br>
<div> Choose 3 ingredients: </div>
@foreach($ingredient as $key => $oneIngredient)
    <label>
        {{ Form::checkbox('ingredients[]', $key) }}
        {{$oneIngredient}}
    </label><br>
@endforeach

{{ Form::label('comment', 'Comment') }}
{{ Form::text('comment', $record['comment']) }}

{{ Form::submit('submit!')}}

{!! Form::close() !!}

</body>
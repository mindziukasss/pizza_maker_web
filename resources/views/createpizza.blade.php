<h1>Pasirink picos sudeti is pasirinkto asortimeno</h1>

{!! Form::open(['url' => route('makepizza.create')]) !!}
    {{ Form::select('pizzapad', $pizzapad) }}
    {{ Form::select('pizzacheese', $pizzacheese) }}

@foreach($ingredients as $key => $ingredient)
    <div>{{ Form::checkbox('ingredients_names[]', $key)}}
        {{$ingredient}}</div>
@endforeach
    {{ Form::submit('Make') }}
{!! Form::close() !!}
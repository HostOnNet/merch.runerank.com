<h1>Add Item</h1>

{!! Form::open(array('action' => 'ItemController@store')) !!}

{!! Form::label('item_name') !!}
{!! Form::text('item_name') !!}

<br>

<br>

{!! Form::label('item_id') !!}
{!! Form::text('item_id') !!}

<br>

<br>

{!! Form::submit('Save') !!}

{!! Form::close() !!}

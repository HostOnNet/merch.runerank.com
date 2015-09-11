<h1>Add Transaction</h1>

{!! Form::open(array('action' => 'TransactionController@store')) !!}

{!! Form::label('item_name') !!}
{!! Form::text('item_name') !!}

<br>

<br>

{!! Form::label('quantity') !!}
{!! Form::text('quantity') !!}

<br>

<br>

{!! Form::label('price') !!}
{!! Form::text('price') !!}

<br>

<br>

{!! Form::submit('Save') !!}

{!! Form::close() !!}


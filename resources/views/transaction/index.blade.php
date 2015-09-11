<h1>Transactions</h1>

<table>

    <tr>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price</td>
    </tr>

    @foreach ($transactions as $transaction)
    <tr>
        <td>{{ $transaction->item_name }}</td>
        <td>{{ $transaction->quantity }}</td>
        <td>{{ $transaction->price }}</td>
    </tr>
@endforeach

</table>

<hr>

<a href="transaction/create">Add Item</a>

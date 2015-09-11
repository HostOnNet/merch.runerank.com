<h1>Items</h1>

<table>
@foreach ($items as $item)
    <tr>
        <td>{{ $item->item_name }}</td>
        <td>{{ $item->item_id }}</td>
    </tr>
@endforeach
</table>

<hr>

<a href="item/create">Add Item</a>

@extends('layout')

@section('content')
<h1>Edit Stock</h1>
<form method="POST" action="{{ route('stocks.update', $stock->id) }}">
    @csrf @method('PUT')
    Product:
    <select name="id_products">
        @foreach ($products as $p)
            <option value="{{ $p->id }}" {{ $stock->id_products == $p->id ? 'selected' : '' }}>
                {{ $p->name }}
            </option>
        @endforeach
    </select><br>
    Type: <input type="text" name="type" value="{{ $stock->type }}"><br>
    Quantity: <input type="number" name="quantity" value="{{ $stock->quantity }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
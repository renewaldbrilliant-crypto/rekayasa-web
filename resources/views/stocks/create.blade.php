@extends('layout')

@section('content')
<h1>Add Stock</h1>
<form method="POST" action="{{ route('stocks.store') }}">
    @csrf
    Product:
    <select name="id_products">
        @foreach ($products as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select><br>
    Type: <input type="text" name="type"><br>
    Quantity: <input type="number" name="quantity"><br>
    <button type="submit">Save</button>
</form>
@endsection
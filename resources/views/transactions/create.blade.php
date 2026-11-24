@extends('layout')

@section('content')
<h1>Add Transaction</h1>
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    Product:
    <select name="id_products">
        @foreach($products as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select><br>
    Quantity: <input type="number" name="quantity"><br>
    Status: <input type="text" name="status"><br>
    <button type="submit">Save</button>
</form>
@endsection
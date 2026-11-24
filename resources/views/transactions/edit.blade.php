@extends('layout')

@section('content')
<h1>Edit Transaction</h1>
<form method="POST" action="{{ route('transactions.update', $transaction->id) }}">
    @csrf @method('PUT')
    Product:
    <select name="id_products">
        @foreach ($products as $p)
            <option value="{{ $p->id }}" {{ $transaction->id_products == $p->id ? 'selected' : '' }}>
                {{ $p->name }}
            </option>
        @endforeach
    </select><br>
    Quantity: <input type="number" name="quantity" value="{{ $transaction->quantity }}"><br>
    Status: <input type="text" name="status" value="{{ $transaction->status }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
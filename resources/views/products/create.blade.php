@extends('layout')

@section('content')
<h1>Add Product</h1>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name: <input type="text" name="name"><br>
    Description: <textarea name="description"></textarea><br>
    Price: <input type="number" name="price"><br>
    <button type="submit">Save</button>
</form>
@endsection
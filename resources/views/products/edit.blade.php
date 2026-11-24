@extends('layout')

@section('content')
<h1>Edit Product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf @method('PUT')
    Name: <input type="text" name="name" value="{{ $product->name }}"><br>
    Description: <textarea name="description">{{ $product->description }}</textarea><br>
    Price: <input type="number" name="price" value="{{ $product->price }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
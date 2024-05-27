@extends('layouts.app')

@section('content')

<h1 class="mt-3">Products</h1>

<a href="{{route('product.create')}}">
    <button type="button" class="btn btn-outline-secondary btn-sm float-end">
        Add Product
    </button></a>

<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">SKU</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->sku}}</td>
            <td>
                <form action="{{ route('product.delete',$product->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('product.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('product.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>

            </td>

        </tr>
        @endforeach

    </tbody>
</table>


@endsection
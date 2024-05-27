@extends('layouts.app')

@section('content')

<h1>Products create</h1>

<form 
    action="{{route('product.store')}}" 
    method="POST"
>
    @csrf

    <div class="mb-3">
        <label 
            for="name" 
            class="form-label"
        >
            Item name
        </label>
        <input 
            type="name" 
            class="form-control" 
            name="name" 
            id="name" 
            placeholder="name"
        >
    </div>

    <div class="mb-3">
        <label 
            for="description" 
            class="form-label"
        >
            Item description
        </label>
        <input 
            type="description" 
            class="form-control" 
            name="description" 
            id="description" 
            placeholder="description" 
            required
        >
    </div>

    <div class="mb-3">
        <label 
            for="quantity" 
            class="form-label"
        >
            Item quantity
        </label>
        <input 
            type="quantity" 
            class="form-control" 
            name="quantity" 
            id="quantity" 
            placeholder="quantity" 
            required
        >
    </div>

    <div class="mb-3">
        <label 
            for="price" 
            class="form-label"
        >
            Item price
        </label>
        <input 
            type="price" 
            class="form-control" 
            name="price" 
            id="price" 
            placeholder="price" 
            required
        >
    </div>

    <div class="mb-3">
        <label 
            for="sku" 
            class="form-label"
        >
            Item sku
        </label>
        <input 
        type="sku" 
        class="form-control" 
        name="sku" 
        id="sku" 
        placeholder="add sku" 
        required
    >
    </div>

    <button 
        type="submit" 
        class="btn btn-primary mb-3"
    >
        Submit
    </button>

</form>

@endsection
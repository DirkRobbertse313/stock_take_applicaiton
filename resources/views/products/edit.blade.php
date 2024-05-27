@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')

<h1>Products create</h1>

<form 
    action="{{route('product.update', $product->id)}}" 
    method="POST"
>
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label 
      for="name" 
      class="form-label"
      >
      Item name
    </label>

        <input 
            type="text" 
            name="name" 
            value="{{ $product->name }}"
            class="form-control" 
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
            type="text" 
            name="description"
            value="{{ $product->description }}"
            class="form-control" 
            id="description"
            placeholder="description"
            
      
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
            type="text" 
            name="quantity" 
            value="{{ $product->quantity}}"
            class="form-control" 
            id="quantity" 
            placeholder="quantity"
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
            type="text" 
            name="price"
            value="{{ $product->price }}"
            class="form-control" 
            id="price"
            placeholder="price"
            
      
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
        type="text" 
        name="sku"
        value="{{ $product->sku }}"
        class="form-control" 
        id="sku"
        placeholder="SKU"
        
  
    >
    </div>
  
    <button 
        type="submit" 
        class="btn btn-primary mb-3 btn-sm"
    >
        Submit
    </button>
    <a href="{{route('product.index')}}">
    <button 
        type="submit" 
        class="btn btn-secondary mb-3 float-right btn-sm"
    >
        Back
    </button>
    </a>

</form>

@endsection

@endsection
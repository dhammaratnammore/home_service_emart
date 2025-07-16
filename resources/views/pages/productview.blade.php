@extends('leyout.app')
@section('titel', 'Product View')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4 text-white">
        <h6 class="mb-4">Product Details</h6>

        <p><strong>Name:</strong> {{ $product->p_name }}</p>
        <p><strong>Price:</strong> ₹{{ $product->p_price }}</p>
        <p><strong>Description:</strong> {{ $product->p_description }}</p>

        <p><strong>Image:</strong></p>
        @if($product->p_image)
            <img src="{{ asset('uplode/' . $product->p_image) }}" alt="Product image" width="200">
        @else
            No image available
        @endif
    </div>
</div>

@endsection


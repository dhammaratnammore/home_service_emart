@extends('leyout.app')
@section('titel', 'Edit Product')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Product</h6>
        <form action="{{ route('product.update', ['id' => $product->product_id]) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="p_name" class="form-label text-white">Product Name</label>
                <input type="text" class="form-control" id="p_name" name="p_name" value="{{ $product->p_name }}" required>
            </div>

            <div class="mb-3">
                <label for="p_price" class="form-label text-white">Price</label>
                <input type="number" class="form-control" id="p_price" name="p_price" value="{{ $product->p_price }}" required>
            </div>

            <div class="mb-3">
                <label for="p_description" class="form-label text-white">Description</label>
                <textarea class="form-control" id="p_description" name="p_description" rows="4" required>{{ $product->p_description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Current Image</label><br>
                @if($product->p_image)
                    <img src="{{ asset('uplode/' . $product->p_image) }}" width="200">
                @else
                    <p class="text-white">No image</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="p_image" class="form-label text-white">New Image</label>
                <input type="file" class="form-control" id="p_image" name="p_image">
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>

@endsection

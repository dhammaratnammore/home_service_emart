@extends('leyout.app')
@section('titel', 'productform')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add product</h6>

       <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- product Name -->
    <div class="mb-3">
        <label for="p_name" class="form-label text-white">Name</label>
        <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product name" required>
    </div>

    <!-- Price -->
    <div class="mb-3">
        <label for="p_price" class="form-label text-white">Price</label>
        <input type="number" step="0.01" class="form-control" id="p_price" name="p_price" placeholder="Enter price" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="p_description" class="form-label text-white">Description</label>
        <textarea class="form-control" id="p_description" name="p_description" rows="3" placeholder="Enter description"></textarea>
    </div>

    <!-- Image -->
    <div class="mb-3">
        <label for="p_image" class="form-label text-white">Image</label>
        <input type="file" class="form-control" id="p_image" name="p_image">
    </div>

    <button type="submit" class="btn btn-success">Add Product</button>
</form>


    </div>
</div>

@endsection

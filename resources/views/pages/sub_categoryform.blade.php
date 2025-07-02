@extends('leyout.app')
@section('titel', 'productform')
@section('admincontent')

    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Add Product</h6>

            <form action="{{ route('subcategoryadd') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label text-white">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category name" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label text-white">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">

                        <h6 class="mb-4">Select Category</h6>
                        <select class="form-select" name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($category as $cat)
                                <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Status</h6>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                                name="status">
                                <option selected disabled>Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Add Sub Category</button>
            </form>

        </div>
    </div>

@endsection
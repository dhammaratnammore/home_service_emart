@extends('leyout.app')
@section('titel', 'Edit Subcategory')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Subcategory</h6>
        <form action="{{ route('subcatupdate', $subcategory->sub_category_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Subcategory Name</label>
                <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Select Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_id }}"
                            {{ $subcategory->category_id == $category->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Current Image</label><br>
                @if($subcategory->image)
                    <img src="{{ asset('uplode/' . $subcategory->image) }}" alt="Subcategory Image" width="100">
                @else
                    No image
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Change Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $subcategory->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $subcategory->status == 0 ? 'selected' : '' }}>Deactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Subcategory</button>
            <a href="{{ route('subcategorylist') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection

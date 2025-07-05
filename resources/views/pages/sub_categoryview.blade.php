@extends('leyout.app')
@section('titel', 'Subcategory View')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Subcategory Details</h6>
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label text-white">Subcategory Name</label>
                <p class="text-white">{{ $subcategory->name }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Category Name</label>
                <p class="text-white">{{ $subcategory->category_name ?? 'N/A' }}</p>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Image</label><br>
            @if($subcategory->image)
                <img src="{{ asset('uploads/' . $subcategory->image) }}" alt="Subcategory Image" width="200">
            @else
                <p class="text-white">No image available</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Status</label>
            <p class="text-white">{{ $subcategory->status == 1 ? 'Active' : 'Deactive' }}</p>
        </div>
        <a href="{{ route('subcategorylist') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection

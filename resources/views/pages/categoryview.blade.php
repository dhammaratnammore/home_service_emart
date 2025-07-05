@extends('leyout.app')
@section('titel', 'Category View')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Category Details</h6>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Image:</strong></p>
        @if($category->image)
            <img src="{{ asset('uploads/' . $category->image) }}" alt="Category image" width="200">
        @else
            No image
        @endif
    </div>
</div>

@endsection

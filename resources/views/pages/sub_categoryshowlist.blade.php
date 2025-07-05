@extends('leyout.app')
@section('titel', 'Subcategory List')
@section('admincontent')

    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Responsive Table</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subcategory Name</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subcategories as $index => $subcategory)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $subcategory->name }}</td>
                                <td>{{ $subcategory->category_name ?? 'N/A' }}</td>
                                <td>
                                    @if($subcategory->image)
                                        <img src="{{ asset('uploads/' . $subcategory->image) }}" alt="Subcategory Image" width="100">
                                    @else
                                        No image
                                    @endif
                                </td>
                                <td>{{ $subcategory->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td>
                                    <a href="{{ route('subcatview', ['id'=>$subcategory->sub_category_id]) }}" class="btn btn-info m-2">View</a>
                                <a href="{{ route('subcatedit', ['id'=>$subcategory->sub_category_id]) }}" class="btn btn-warning m-2">Edit</a>
                                    <a href="{{ route('subcatdestroy',['id'=>$subcategory->sub_category_id]) }}">
                                        <button type="submit" class="btn btn-danger m-2"
                                            onclick="return confirm('Are you sure you want to delete this subcategory?')">
                                            Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($subcategories->isEmpty())
                    <p class="text-white text-center mt-4">No subcategories found.</p>
                @endif
            </div>
        </div>
    </div>

@endsection

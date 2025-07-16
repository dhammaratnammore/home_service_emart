@extends('leyout.app')
@section('titel', 'productlist')
@section('admincontent')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Responsive Product Table</h6>
        <div class="table-responsive">
            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productlist as $pro)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pro->p_name }}</td>

                            <td>
                                @if($pro->p_image)
                                    <img src="{{ asset('uplode/' . $pro->p_image) }}" alt="Product Image" width="100">
                                @else
                                    No image
                                @endif
                            </td>

                            <td>{{ $pro->p_price }}</td>
                            <td>{{ $pro->p_description }}</td>

                            <td class="d-flex flex-column">
                                <a href="{{ route('product.view', ['id' => $pro->product_id]) }}" class="btn btn-info btn-sm m-1">View</a>

                                <a href="{{ route('product.edit', ['id' => $pro->product_id]) }}" class="btn btn-warning btn-sm m-1">Edit</a>

                                <form action="{{ route('product.destroy', ['id' => $pro->product_id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');" class="m-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@extends('layouts.admin.index')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Add-ons</h1>
    </div>
    <div>
        <a href="{{ route('addons.create') }}" class="btn btn-primary mb-3">Create Add-ons</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Total Order</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $item)
                <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>
                        <img src="{{ $item['image_url'] }}" style="width:100px; height: 100px; object-fit:cover" alt="">
                    </td>
                    <td>1</td>
                    <td>
                        <a href="{{ route('addons.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('addons.destroy', $item->id) }}" class="d-inline-block" method="post">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>


@endsection

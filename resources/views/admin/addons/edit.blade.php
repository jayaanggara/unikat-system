@extends('layouts.admin.index')

@section('content')
<form method="post" action="{{ route('addons.update', $data->id)  }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="mb-3 col">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{ $data['name'] }}">
            @if($errors->has('name'))
            <span>
                {{ $errors->first('name') }}
            </span>
            @endif
        </div>
    </div>
    <div class="row row-cols-2">
        <div class="mb-3 col">
            <label for="exampleInputPassword1" class="form-label">price</label>
            <input type="number" class="form-control" name="price" id="exampleInputPassword1" value="{{ $data['price'] }}">
            @if($errors->has('price'))
            <span>
                {{ $errors->first('price') }}
            </span>
            @endif
        </div>
        <div class="mb-3 col">
            <label for="exampleInputPassword1" class="form-label">price show</label>
            <input type="text" class="form-control" name="price_show" id="exampleInputPassword1" value="{{ $data['price_show'] }}">
            @if($errors->has('price_show'))
            <span>
                {{ $errors->first('price_show') }}
            </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="exampleInputPassword1" class="form-label">deskripsi</label>
            <textarea class="editor-textarea" name="desk" placeholder="Leave a Description here" id="floatingTextarea2" style="height: 100px">{{ $data['description'] }}</textarea>
            @if($errors->has('description'))
            <span>
                {{ $errors->first('description') }}
            </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input class="form-control" type="file" name="image" placeholder="Choose image" id="image">
            <img src="{{ $data['image_url'] }}" alt="" class="py-4">
            @if($errors->has('status'))
            <span>
                {{ $errors->first('status') }}
            </span>
            @endif
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

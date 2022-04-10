@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
    <div class="row">
        <div class="col-8 offset-2">

        <div class="row">
            <h1>Add New Post</h1>
        </div>

            <div class="row mb-3">
                <label for="caption" class="col-md-4
                col-form-label">Post Caption</label>

                <input id="caption" type="text"
                class="form-control @error('caption')
                is-invalid @enderror"
                name="caption"
                value="{{ old('caption') }}" required
                autocomplete="caption" autofocus>

                @error('caption')
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <input type="file" class="form-control-file"
                id="image" name="image">

                @error('image')
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <button class="btn btn-primary mt-4" style="width: 150px">Add New Post</button>
            </div>

        </div>
    </div>
    </form>
</div>
@endsection

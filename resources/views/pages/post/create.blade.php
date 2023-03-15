@extends('app')
@section('title', 'Tambah Post')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="card-body mt-2">
            <div class="form-group">
                <label for="Title" class="col-md-2 col-md-offset-1 control-label">Title</label>
                <input type="text" class="form-control @error('Title') is-invalid @enderror" id="Title" name="Title"
                    placeholder="Title" value="{{ old('Title') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" class="form-control"></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer mt-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection

@extends('app')
@section('title', 'Edit Post')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body mt-2">
            <div class="form-group">
                <label for="title" class="col-md-2 col-md-offset-1 control-label">Title</label>
                <input type="text" class="form-control @error('Title') is-invalid @enderror" id="title" name="title"
                    placeholder="Title" value="{{ $post->title }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" class="form-control">{{ $post->description }}</textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer mt-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection

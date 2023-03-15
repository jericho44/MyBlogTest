@extends('app')
@section('title', 'Post')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @foreach ($posts as $post)
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection

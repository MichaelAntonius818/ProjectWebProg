@extends('layouts.app')
@section('content')
<h2 class="text-center mb-4">Popular Articles</h2>
<div class="row">
@foreach($posts as $post)
  <div class="col-md-4 mb-4">
    <div class="card shadow-sm h-100">
      <img src="https://picsum.photos/400/250?random={{ $post->id }}" class="card-img-top" alt="image">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p class="text-muted">By {{ $post->writer->name }}</p>
        <p>{{ Str::limit($post->content, 100) }}</p>
        <a href="{{ route('category.show', $post->category->id) }}" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="d-flex justify-content-center mt-4">
  {{ $posts->links('pagination::bootstrap-5') }}
</div>
@endsection

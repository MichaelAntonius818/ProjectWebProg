@extends('layouts.app')
@section('content')
<div class="text-center mb-4">
  <h1 class="fw-bold">Welcome to EduFun</h1>
  <p>Learn Interactive Multimedia & Software Engineering for free!</p>
</div>

<div class="row">
@foreach($posts as $post)
  <div class="col-md-4 mb-4">
    <div class="card shadow-sm">
      <img src="https://picsum.photos/400/200?random={{ $post->id }}" class="card-img-top" alt="image">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text text-muted">By {{ $post->writer->name }} | {{ $post->created_at->format('d M Y') }}</p>
        <p>{{ Str::limit($post->content, 80) }}</p>
        <a href="{{ route('category.show', $post->category->id) }}" class="btn btn-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

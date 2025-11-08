@extends('layouts.app')
@section('content')
<h3 class="text-center mb-4">{{ $category->name }} Courses</h3>
<div class="row">
@foreach($posts as $post)
  <div class="col-md-6 mb-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p class="text-muted">{{ $post->writer->name }} | {{ $post->created_at->format('d M Y') }}</p>
        <p>{{ Str::limit($post->content, 150) }}</p>
        <a href="#" class="btn btn-outline-secondary btn-sm">Read More</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

@extends('layouts.app')
@section('content')
<h3 class="text-center mb-3">{{ $writer->name }}</h3>
<p class="text-muted text-center mb-4">{{ $writer->bio }}</p>

<div class="row">
@foreach($writer->posts as $post)
  <div class="col-md-6 mb-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p>{{ Str::limit($post->content, 150) }}</p>
        <a href="{{ route('category.show', $post->category->id) }}" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

@extends('layouts.app')
@section('content')
<h2 class="mb-4 text-center">Categories</h2>
<div class="row">
@foreach($categories as $cat)
  <div class="col-md-6 mb-4">
    <div class="card shadow-sm h-100 text-center">
      <div class="card-body">
        <h5>{{ $cat->name }}</h5>
        <p>{{ $cat->description }}</p>
        <a href="{{ route('category.show', $cat->id) }}" class="btn btn-outline-primary btn-sm">View Details</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

@extends('layouts.app')
@section('content')
<h2 class="text-center mb-4">Writers</h2>
<div class="row">
@foreach($writers as $writer)
  <div class="col-md-4 mb-4">
    <div class="card text-center shadow-sm h-100">
      <div class="card-body">
        <h5>{{ $writer->name }}</h5>
        <p>{{ Str::limit($writer->bio, 100) }}</p>
        <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-primary btn-sm">View Articles</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

@extends('template.index')
@section("content")
  @foreach ($outilsScolaires as $outilsScolaire)
      <h2>{{ $outilsScolaire }}</h2>
  @endforeach
@endsection
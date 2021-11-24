@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success col-lg-10 mt-5" role="alert">
  {{ session('success') }}
</div>
@endif
@endsection

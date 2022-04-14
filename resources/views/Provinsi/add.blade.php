@extends('layout.layout')
@section('title','add provinsi')
@section('contens')
<div class="container">
<form action="{{ route('save-add-provinsi')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi</label>
    <input type="text" class="form-control" id="provinsi"  name="provinsi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
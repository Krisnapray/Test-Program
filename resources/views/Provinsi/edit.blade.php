@extends('layout.layout')
@section('title','edit provinsi')
@section('contens')
<div class="container">
<form action="{{ route('save-edit-provinsi', $data->id)}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi</label>
    <input type="text" class="form-control" id="provinsi" value="{{ $data->nama_provinsi}}" name="provinsi" required autofocus>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-success " type="button" href="{{ route('provinsiData') }}">back</a>
</form>
  
</div>
@endsection
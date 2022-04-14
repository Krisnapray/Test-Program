@extends('layout.layout')
@section('title','edit kabupaten')
@section('contens')
<div class="container">
<form action="{{ route('save-edit-kabupaten',$datas->id)}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi</label>
    <!-- <input type="text" class="form-control" id="kabupaten" name="kabupaten"> -->
    <select class="form-control" id="provinsi_id" name="provinsi_id">
      @foreach ($data as $datas)
        <option value="{{ $datas->id }}">{{$datas->nama_provinsi}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="n" class="form-label">Kabupaten</label>
    <input type="text" class="form-control"  id="kabupaten" value="{{$datas->kabupaten}}" name="kabupaten">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-success " type="button" href="{{ route('kabupatenData') }}">back</a>
</form>
</div>
@endsection
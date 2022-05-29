@extends('layout.layout')
@section('title','add kabupaten')
@section('contens')
<div class="container">
<form action="{{ route('save-add-kabupaten')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi</label>
    <select class="form-control" id="provinsi_id" name="provinsi_id">
      @foreach($data as $datas)
        <option value="{{$datas->id}}">{{$datas->nama_provinsi}}</option>
      @endforeach
    </select>
    
  </div>
  <div class="mb-3">
    <label for="kabupaten" class="form-label">Kabupaten</label>
    <input type="text" class="form-control" id="kabupaten" name="kabupaten">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</div>
@endsection
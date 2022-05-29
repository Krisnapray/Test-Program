@extends('layout.layout')
@section('title','edit kabupaten')
@section('contens')
<div class="container">
<form action="{{ route('save-edit-Daerah',$data->id)}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="kabupaten" class="form-label">Kabupaten</label>
    <!-- <input type="text" class="form-control" id="kabupaten" name="kabupaten"> -->
    <select class="form-control" id="kabupaten_id" name="kabupaten_id">
      @foreach ($datas as $data)
        <option value="{{ $data->id }}">{{$data->kabupaten}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="daerah" class="form-label">Daerah</label>
    <input type="text" class="form-control" value="{{ $data->daerah }}" id="daerah" name="daerah">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-success " type="button" href="{{ route('daerahData') }}">Back</a>
</form>
</div>
@endsection
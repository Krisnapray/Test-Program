@extends('layout.layout')
@section('title','add kabupaten')
@section('contens')

<div class="container">
<form action="{{ route('save-daerah')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="kabupaten" class="form-label">Kabupaten</label>
    <!-- <input type="text" class="form-control" id="kabupaten" name="kabupaten"> -->
    <select class="form-control" id="kabupaten_id" name="kabupaten_id">
      @foreach ($data as $datas)
        <option value="{{ $datas->id }}">{{$datas->kabupaten}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="daerah" class="form-label">Daerah</label>
    <input type="text" class="form-control" id="daerah" name="daerah">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
@extends('layout.layout')
@section('title','kabupaten')
@section('contens')
<div class="container">
    <div class="card mt-3">
    <div class="card-header">
        
    </div>
    <div class="card-body">

        <div class="text-end upgrade-bt mr-5 mb-3 mt-3">
        <a href="{{route('add-kabupaten')}}" class="btn btn-success d-none d-md-inline-block text-white">
        Tambah kabupaten
        </a>
        </div>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kabupaten</th>
            <th scope="col">Nama Provinsi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $datas)
            <tr>
            <th scope="row">{{ $loop->index+1+($data->currentPage()-1)*5}}</th>
            <td>{{$datas->kabupaten}}</td>
            <td>{{$datas->nama_provinsi}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="basic-example">
                @csrf
                <a type="button" class="btn btn-info" href="{{route('Edit-kabupaten',$datas->id)}}">Edit</a>
                </div>
                <td>
                <form action="{{route('delete-kabupaten',$datas->id)}}" method="post" >
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        <div class="mt-4 text-center">

            showing
            {{$data->firstItem()}}
            to
            {{$data->lastItem()}}
            to
            {{$data->links()}}
        </div>
    </div>
</div>

@endsection
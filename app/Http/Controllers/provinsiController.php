<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provinsi;
use Illuminate\Support\Facades\DB;
use illuminate\Pagination\Paginator;

class provinsiController extends Controller
{
    //
    public function provinsi(){
        $data = provinsi::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('Provinsi.data',compact('data'));   
    }

    public function Dataprovinsi(Request $request){
        return view('Provinsi.add');   
    }

    public function SaveDataprovinsi(Request $request){
        $request->validate([
            "provinsi"=>"required"
        ]);   

        $data= new provinsi();
        $data->nama_provinsi= $request->provinsi;
        $data->save();

        return redirect('/');
    }

    public function EditDataprovinsi(Request $request,$id){
        
        $data= provinsi::find($id);
        return view('Provinsi.edit',compact('data'));
    }

    public function SaveEditprovinsi(Request $request,$id){
        
        $request->validate([
            "provinsi"=>"required"
        ]);

        $data= provinsi::find($id);
        $data->nama_provinsi=$request->provinsi;
        $data->update();

        return redirect('/');

    }

    public function Deleteprovinsi($id){
        
        $data=provinsi::find($id);
        $data->delete();

        return redirect('/');

    }
}

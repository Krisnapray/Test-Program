<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kabupaten;
use App\Models\daerah;
use illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
class daerahController extends Controller
{
    //
    public function daerah(){
        $data =daerah::join('kabupatens','kabupatens.id','=','daerahs.id_kabupaten')
        ->join('provinsis','provinsis.id','=','kabupatens.id_provinsi')->select('daerahs.*','kabupatens.kabupaten','provinsis.nama_provinsi')->latest()->paginate(5);
        Paginator::useBootstrap();   
        return view('daerah.data',compact('data'));   
    }

    public function Datadaerah(Request $request){
        $data= DB::Table('kabupatens')->get();
        return view('daerah.add',compact('data'));   
    }

    public function SaveDatadaerah(Request $request){
        $request->validate([
            "kabupaten_id"=>"required",
            "daerah"=>"required"
        ]);   

        $data=new daerah();
        $data->daerah=$request->daerah;
        $data->id_provinsi='1';
        $data->id_kabupaten= $request->kabupaten_id;
        $data->save();

        return redirect('/dataDaerah');
    }

    public function EditDatadaerah(Request $request,$id){
        
        $data=daerah::find($id);
        $datas=kabupaten::all();
       
        return view('daerah.edit',compact('data','datas'));
    }

    public function SaveEditdaerah(Request $request,$id){  
        $request->validate([
            "kabupaten_id"=>"required",
            "daerah"=>"required"
        ]);

        $data=daerah::find($id);
        $data->daerah=$request->daerah;
        $data->id_kabupaten=$request->kabupaten_id;
        $data->update();

        return redirect('/dataDaerah');
    }

    public function Deletedaerah($id){
        $data=daerah::find($id);
        $data->delete();
        return redirect('/dataDaerah');
    }
}

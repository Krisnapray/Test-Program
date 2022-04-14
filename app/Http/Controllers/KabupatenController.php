<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kabupaten;
use App\Models\provinsi;
use illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
class KabupatenController extends Controller
{
    //
    public function kabupaten(){
        $data =kabupaten::join('provinsis','provinsis.id','=','kabupatens.id_provinsi')
        ->select('kabupatens.*','provinsis.nama_provinsi')->latest()->paginate(5);
        Paginator::useBootstrap();
        return view('kabupaten.data',compact('data'));   
    }

    public function addkabupaten(Request $request){
        $data= DB::Table('provinsis')->get();
        return view('kabupaten.add',compact('data'));   
    }

    public function SaveDatakabupaten(Request $request){
        $request->validate([
            "kabupaten"=>"required",
            "provinsi_id"=>"required"
        ]);   

        $data=new kabupaten();
        $data->kabupaten=$request->kabupaten;
        $data->id_provinsi=$request->provinsi_id;
        $data->save();

        return redirect('/dataKabupaten');
    }

    public function EditDatakabupaten(Request $request,$id){
        
        $data= provinsi::all();
        $datas=kabupaten::find($id);
        return view('Kabupaten.edit',compact('data','datas'));
    }

    public function SaveEditkabupaten(Request $request,$id){  
        $request->validate([
            "provinsi_id"=>"required",
            "kabupaten"=>"required"
        ]);

        $data=kabupaten::find($id);
        $data->kabupaten=$request->kabupaten;
        $data->id_provinsi=$request->provinsi_id;
        $data->update();

        return redirect('/dataKabupaten');
    }

    public function Deletekabupaten($id){
        $data=kabupaten::find($id);
        $data->delete();

        return redirect('/dataKabupaten');
    }

}

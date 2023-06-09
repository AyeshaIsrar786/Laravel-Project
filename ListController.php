<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ListController extends Controller
{
    public function index(){
        return view("listform");
    }

    public function create(Request $request){
        $request->validate( 
            [ 
                'name'=>'required', 
                'workinghours'=>'required',
                'desc'=>'required' 
            ]);
        $data= $request->all();
        $arr=Arr::only($data,array('name','workinghours','desc')); 
        $newarray=$request->session()->get("newarray",[]); 
        $newarray[]=$arr;
        $request->session()->put("newarray",$newarray);
        return redirect()->back();
    }

    public function showme(Request $req){
        $data= $req->session()->get("newarray");
        return view("listtable",compact('data'));
    }

    public function delete($id){
        // echo "testing";
        // exit();
        $session= session("newarray");
        $list=Arr::forget($session,$id);
        session()->put("newarray",$session);
        return redirect()->back();
    }

}

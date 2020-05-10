<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sliderr;
use File;
class slidersController extends Controller
{
    public function index()
    {
    	$sliderrs= sliderr::all();
    	
return view('admin.sliders.index')->with(compact('sliderrs'));;   }


public function store(request $request)
  
  {
    $file=$request->file('photo');
    $path=public_path() . '/images/sliders';
    $fileName=uniqid() . $file->getClientOriginalName();
    $moved=$file->move($path, $fileName);

    if ($moved){
    $sliderrs=new sliderr();
    $sliderrs->name=$fileName;
    $sliderrs->texto1=$request->input('texto1');
    $sliderrs->texto2=$request->input('texto2');
    $sliderrs->save();
  }
    return back();
  } 
 public function destroy($id)
  {
    
    $sliderr= sliderr::find($id);
    if(substr($sliderr->name, 0, 4)==="http"){
      $deleted=true;
    } else{
      $fullPath=public_path() . '/images/sliders/' . $sliderr->name;
      $deleted=file::delete($fullPath);
    }
    if($deleted){
      
    
    $sliderr->delete();
}
    return back();



  }   

}


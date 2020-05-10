<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\User;
class UserController extends Controller
{
    public function index()

  {
  	$users=user::paginate(12);
  	return view('admin.users.index')->with(compact('users'));//listado usuarios
  } 
  public function create()
  {
  	return view('admin.users.create');
  }
  public function store(Request $request)
  
  {

  	$user= new user();
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->password=$request->input('password');
    $user->direccion=$request->input('direccion');
    $user->sexo=$request->input('sexo');
    $user->telefono=$request->input('telefono');
    $user->admin=$request->input('admin');
    $user->save();
    return redirect('/admin/users');
  }
 public function edit($id)
  
  {
     
    $user=user::find($id);
    return view('admin.users.edit')->with(compact('user'));//formulario de registor
  }  
  public function update(Request $request, $id)
  {
    //dd($request->all());
    $user= user::find($id);
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->password=$request->input('password');
    $user->direccion=$request->input('direccion');
    $user->sexo=$request->input('sexo');
    $user->telefono=$request->input('telefono');
    $user->admin=$request->input('admin');
    $user->save();

   
    return redirect('/admin/users');



  } 
  public function destroy($id)
  {
    
    $user= user::find($id);
    $user->delete();
    return back();



  }     


}

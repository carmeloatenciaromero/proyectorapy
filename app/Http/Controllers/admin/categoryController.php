<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class categoryController extends Controller
{
    public function index()

  {
  	$categories=category::paginate(10);
  	return view('admin.categories.index')->with(compact('categories'));//listado productos
  } 
  public function create()
  {
  	return view('admin.categories.create');//formulario de registor
  }  
  public function store(Request $request)
  {
  	$messages=[
  		'name.required'=>'Es necesrio ingresar el nombre de la categoria.',
  		'name.min'=>'el nombre de la categoria debe tener al menos 3 caractres.',
  		'description.required'=>'la descripcion es obligatoria.',
  		'description.max'=>'la descripcion debe de tener maximo 200 caracteres'
  	];
  	$rules=[
  		'name'=>'required|min:3',
  		'description'=>'required|max:200'
  	];
  	$this->validate($request, $rules, $messages);

  	
    $category= new category();
    $category->name=$request->input('name');
    $category->description=$request->input('description');
    $category->save();
    return redirect('/admin/categories');

  }   
  public function edit($id)
  
  {
    $category=category::find($id);
    return view('admin.categories.edit')->with(compact('category'));//formulario de registor
  }  
  public function update(Request $request, $id)
  {
    //dd($request->all());
    $category= category::find($id);
    $category->name=$request->input('name');
    $category->description=$request->input('description');
    $category->save();
    return redirect('/admin/categories');



  }   
  public function destroy($id)
  {
    
    $category= category::find($id);
    $category->delete();
    return back();



  }   
}

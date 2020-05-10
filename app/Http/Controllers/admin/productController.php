<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use\App\product;
use\App\Category;

class productController extends Controller
{
  public function index()

  {
  	$products=product::paginate(10);
  	return view('admin.products.index')->with(compact('products'));//listado productos
  } 
  public function create()
  {
    $categories=category::orderBy('name')->get();
  	return view('admin.products.create')->with(compact('categories'));//formulario de registor
  }  
  public function store(Request $request)
  {
    $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'La descripción corta es un campo obligatorio.',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
            'price.required' => 'Es obligatorio definir un precio para el producto.',
            'price.numeric' => 'Ingrese un precio válido.',
            'price.min' => 'No se admiten valores negativos.'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:1'
        ];
        $this->validate($request, $rules, $messages);
  	//dd($request->all());
    $product= new product();
    $product->name=$request->input('name');
    $product->description=$request->input('description');
    $product->long_description=$request->input('long_description');
    $product->price=$request->input('price');
    $product->category_id = $request->category_id;

    $product->save();
    return redirect('/admin/products');

  }   
  public function edit($id)
  
  {
     $categories=category::orderBy('name')->get();
    $product=product::find($id);
    return view('admin.products.edit')->with(compact('product', 'categories'));//formulario de registor
  }  
  public function update(Request $request, $id)
  {
    //dd($request->all());
    $product= product::find($id);
    $product->name=$request->input('name');
    $product->description=$request->input('description');
    $product->long_description=$request->input('long_description');
    $product->price=$request->input('price');
    $product->category_id = $request->category_id;
    $product->save();
    return redirect('/admin/products');



  }   
  public function destroy($id)
  {
    
    $product= product::find($id);
    $product->delete();
    return back();



  }   
}

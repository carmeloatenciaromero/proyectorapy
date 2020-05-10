<?php

namespace App\Http\Controllers\admin;
use App\Http\controllers\controller;

use Illuminate\Http\Request;
use App\product;
use App\productImage;
use File;

class ImageController extends Controller
{
    public function index($id)
    {
      $product = Product::find($id);
      $images = $product->images()->orderBy('featured', 'desc')->get();
      return view('admin.products.images.index')->with(compact('product', 'images'));
    }
  public function store(request $request, $id)
  
  {
    $file=$request->file('photo');
    $path=public_path() . '/images/products';
    $fileName=uniqid() . $file->getClientOriginalName();
    $moved=$file->move($path, $fileName);

    if ($moved){
    $productImage=new productImage();
    $productImage->image=$fileName;
    $productImage->product_id=$id;
    $productImage->save();
  }
    return back();
  }  
  
  public function destroy(request $request, $id)
  {
    $productImage= productImage::find($request->input('image_id'));

    if(substr($productImage->image, 0, 4)==="http"){
      $deleted=true;
    } else{
      $fullPath=public_path() . '/images/products/' . $productImage->image;
      $deleted=file::delete($fullPath);
    }
    if($deleted){
      $productImage->delete();
    }
    return back();

    
  }

  public function select( $id, $image)
  {
    productImage::where('product_id', $id)->update([
      'featured' => false]);
    $productImage=productImage::find($image);
    $productImage->featured= true;
    $productImage->save();
    return back();

  }

}
 /*return redirect('/admin/products');*/
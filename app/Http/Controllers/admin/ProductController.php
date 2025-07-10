<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Models\subcategory;
use App\Models\Product;
use App\Models\productquery;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //view list

    public function show()
    {
      $data=Product::get()->all();
        return view('admin.product.productlist',compact('data'));
    }


    public function view()
    {
        $data=category::get()->all();

       return view('admin.product.Add',compact('data'));
    }

    public function getsubcategory(Request $request)
    {
       $categoryid=$request->post('categoryid');
       $subcategory =DB::table('subcategories')->where('children_id',$categoryid)
      ->orderBy('subcategory','asc')->get()->all();
     $html='<option value="">-Select Category-</option>';
     foreach ($subcategory as $item){
        $html.='<option value="'.$item->id.'">'.$item->subcategory.'</option>';
     };
     echo $html;     
}   



//add


public function Add(Request $req)
{           $url = str_replace(' ','-', $req->pname);
   $req['url'] = strtolower($url);
    
     $validator = Validator::make($req->all(), [
    'image' => 'required',
    'pname' => 'required',
    'mrp' => 'required',
    'net_quantity' => 'required',
    'short' => 'required',
    'description' => 'required',
    'sellingprice' => 'required',
    'category' => 'required',
    'subcategory' => 'required',

    ]);
if ($validator->fails())
{
//
   return back()->withErrors($validator)->withInput();
}

if($req->image!='')
{
   $image= "assets/img/product/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/product"),$image);
}



        $data= new Product();
       
        $data->name= $req->pname;
        $data->mrp= $req->mrp;
        $data->sellingprice= $req->sellingprice;
        $data->net_quantity= $req->net_quantity;
        $data->shortdescription= $req->short;
        $data->description=$req->description;
        $data->url= $req['url'];
        $data->category_id=$req->category;
        $data->subcate_id=$req->subcategory;

        $data->image=$image;
       
        $data->save();
        return back()->with('status', 'Product Has been successfully Added ');


}


//edit
public function edit($id)
{   
    $data =Product::get()->where('id',$id)->first();
    $cate=category::get()->all();
    $sub=subcategory::get()->where('id',$data->subcate_id)->first();

    return view('admin.product.edit',compact('data','cate','sub'));
}

//editpage Fetch sub 
public function fetchsubcategory(Request $request)
    {
       $categoryid=$request->post('categoryid');
       $subcate =DB::table('subcategories')->where('children_id',$categoryid)
      ->orderBy('subcategory','asc')->get()->all();
     $html='<option value="">-Select Category-</option>';
     foreach ($subcategory as $item){
        $html.='<option value="'.$item->id.'">'.$item->subcategory.'</option>';
     };
     echo $html;     
}   




//productdelete
public function delete(Request $req)
    {
        $id = $req->id;
        $delete = Product::find($id);
        $delete->delete();
        return back()->with('status', 'Product Has Been Deleted Successfully ');
    }



//update


//update
public function update(Request $req)
{      $url = str_replace(' ','-', $req->pname);
   $req['url'] = strtolower($url);
   
    $validator = Validator::make($req->all(), [
      
      'pname' => 'required',
      'mrp' => 'required',
      'net_quantity' => 'required',
      'short' => 'required',
      'description' => 'required',
      'sellingprice' => 'required',
      'category' => 'required',
      'subcategory' => 'required',
   ]);
if ($validator->fails())
{
//
  return back()->withErrors($validator);
}
if($req->file('image')!='')
{  $data1 = Product::get()->where('id',$req->id)->first();
   if($data1->image!="")
   {
      $image = $data1->image;

      $imagepathimage =(\public_path($image));
      File::delete($imagepathimage);
      File::delete($image);
   }
   $image= "assets/img/product/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/product"),$image);
}

 $data = Product::find($req->id);
 $data->name= $req->pname;
 $data->mrp= $req->mrp;
 $data->sellingprice= $req->sellingprice;
 $data->net_quantity= $req->net_quantity;
 $data->shortdescription= $req->short;
 $data->description=$req->description;
 $data->url= $req['url'];
 $data->category_id=$req->category;
 $data->subcate_id=$req->subcategory;

 if($req->image!='')
 {
   $data->image=$image;
 }

 $data->save();
 return back()->with('status','Product Has Been updated Successfully ');
}




//productqueries list

public function queries_show()
{
  $data=productquery::Join('products as products', 'products.id', '=', 'productqueries.product_id')
  ->select('productqueries.id','productqueries.user_name','productqueries.number', 'productqueries.qty','products.name','productqueries.email','productqueries.created_at')
  ->get()->all();

    return view('admin.productquery.querylist',compact('data'));
}

//productqueries edit

public function queries_edit($id)
{    
   $product= Product::get()->all();


  $data=productquery::Join('products as products', 'products.id', '=', 'productqueries.product_id')
  ->select('productqueries.id','productqueries.product_id','productqueries.user_name','productqueries.msg','productqueries.number', 'productqueries.qty','products.name','productqueries.email','productqueries.created_at')
  ->where('productqueries.id',$id)->first();

    return view('admin.productquery.editquery',compact('data','product'));
}



//update queries

public function queries_update(Request $request)
{   
  
  
   $validator = Validator::make($request->all(), [
        'user_name' => 'required',
        'email' => 'required',
        'number' => 'required',
        'qty' => 'required',
       
        ]);

    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withInput();
    }

   $data =  productquery::find($request->id);
    
    $data->user_name=$request->user_name;
    $data->email=$request->email;
    $data->number=$request->number;
    $data->product_id= $request->pname;
    $data->qty=$request->qty;
    $data->msg=$request->msg;
    $data->save();


    return back()->with('status', 'Your Query Has been Update successfully');
}     








//productqueries
public function queries_delete(Request $req)
    {  
      
        $delete = productquery::find($req->id);
        $delete->delete();
        return back()->with('status', 'Product Query Has Been Deleted Successfully ');
    }




}

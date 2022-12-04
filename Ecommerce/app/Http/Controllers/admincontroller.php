<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use League\CommonMark\Node\Query\OrExpr;
use PDF;
class admincontroller extends Controller
{
    public function show_category(){
        $all_data=category::all();
        return view('admin.category',compact('all_data'));
    }

    public function add_category(Request $request){

        category::create([
           'category_name' =>$request->category
        ]);
       /* $data = new category;
        $data->category_name = $request->category;
        $data->save();*/
        return redirect()->back()->with('message','Your category added successfully');
    }
    public function del_category($id)
    {
        $d=category::find($id);
        if(!$d){
            return redirect()->back()->with('notfound','this category does not exist');
        }
        $d->delete();
        return redirect()->back()->with('del_message','Your category deleted successfully');;
    }

    public function show_products(){
        $all_data2=Product::all();
        $category=category::all();

        return view('admin.show_product',compact('category','all_data2'));
    }

    public function add_product(Request $request)
    {
        $all_data2 = Product::all();
        $category = category::all();

        return view('admin.add_product', compact('category', 'all_data2'));
    }

    public function submit_product(Request $request)
    {
        $data2 = new Product();
        $data2->title = $request->title;
        $data2->description = $request->description;
        $data2->price = $request->price;
        $data2->catagory = $request->catagory;
        $data2->quantity = $request->quantity;
        $data2->discount_price = $request->discount_price;
        $img=$request->image;
        $imgname=time().'.'.$img->getClientOriginalExtension();
        $request->image->move('Product',$imgname);
        $data2->image=$imgname;
        $data2->save();
        return redirect()->back()->with('message','Your category added successfully');
    }
    public function del_product($id)
    {
        $d=Product::find($id);
        if(!$d){
            return redirect()->back()->with('notfound','this category does not exist');
        }
        $d->delete();
        return redirect()->back()->with('del_message','Your category deleted successfully');;
    }
    public function update_product($id)
    {
        $product=Product::find($id);
        $category=category::all();
            return view('admin.update',compact('product','category'));

    }

    public function submit_update_product(Request $request,$id)
    {

        $p=Product::find($id);
        $p->title=$request->title;
        $p->description= $request->description;
        $p->price=$request->price;
        $p->discount_price =$request->discount_price;
        $p->catagory=$request->catagory;
        $p->quantity =$request->quantity;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Product', $imagename);
        $p->image=$imagename;

        $p->save();
        return redirect()->route('show_products');
    }
    public function order(){
        $orders=Order::all();
        return view('admin.order',compact('orders'));
    }
    public function delivered($id){
        $product=Order::find($id);
        $product->delivery_status='delivered';
        $product->payment_status='paid';
        $product->save();
        return redirect()->back();

    }
    public function create_pdf($id){
        $order=Order::find($id);
        $pdf=PDF::loadView('admin.create_pdf',compact('order'));
        return $pdf->download('order_details.pdf');


    }
}

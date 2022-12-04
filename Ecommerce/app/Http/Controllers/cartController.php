<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function add_cart(Request $request,$id){
        if(Auth::id()){
            $user=Auth::user();
            /*            dd($user);*/
            $product=Product::find($id);
            $cart = new Cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;

            if($product->discount_price!=0)
            {
                $cart->price=$product->discount_price *$request->quan;
                ;
            }
            else
            {
                $cart->price=$product->price *$request->quan;
            }
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quan;
            $cart->save();
            return redirect()->route('userHome')->with('message','Thank you! ,your product is added into your cart successfully');;

        }
        else{
            return  redirect('login');
        }
    }
    public function user_cart(){
        $id =Auth::user()->id;
        $cart=Cart::where('user_id','=',$id)->get();
        return view('User.cart',compact('cart'));
    }

    public function user_order(){
        $id =Auth::user()->id;
        $orders=Order::where('user_id','=',$id)->get();
        return view('User.show_order',compact('orders'));
    }


    public function del_from_cart($id)
    {
        $d=Cart::find($id);
        if(!$d){
            return redirect()->back()->with('notfound','this category does not exist');
        }
        $d->delete();
        return redirect()->back()->with('del_message','Your category deleted successfully');;
    }

    public function cancel_order($id)
    {
        $d=Order::find($id);
        $d->delivery_status='cancelled';
        $d->save();
        return redirect()->back()->with('del_message','Your order is  cancelled successfully');;
    }

}

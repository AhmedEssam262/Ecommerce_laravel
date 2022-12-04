<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reply;
use App\Models\User;
use Faker\Provider\Base;use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index()
    {
        $comments=Comment::orderby('id','desc')->get();
        $reply=Reply::all();


        $product=Product::paginate(6);
    return view('User.home', compact('product','comments','reply'));


    }
    public function redirect(){
        $user_admin =Auth::user()->usertype;

        if($user_admin ==0){
            $product=Product::paginate(6);
            $comments=Comment::orderby('id','desc')->get();
            $reply=Reply::all();

            return view('User.home', compact('product','comments','reply'));
        }
        else{
            $total_products=Product::all()->count();
            $total_users=User::all()->count();
            $total_orders=Order::all()->count();
            $actual_revenue=Order::where('payment_status','=','paid')->get()->sum('price');
            $orders_revenue=Order::all()->sum('price');
            $order_delivered=Order::where('delivery_status','=','delivered')->get()->count();
            $order_proccessing=Order::where('delivery_status','=','proccessing')->get()->count();
            $order_canceled=Order::where('delivery_status','=','cancelled')->get()->count();
            return view('admin.dashadmin',compact('total_products','total_users','total_orders',
                'orders_revenue','actual_revenue','order_delivered','order_proccessing','order_canceled'));
        }
    }
    public function product_details($id){
        $product=Product::find($id);
        return view('User.product_details',compact('product'));
    }
    public function comment(Request $request){

        $comment = new Comment;
        $comment->name=Auth::user()->name;
        $comment->user_id=Auth::user()->id;
        $comment->comment=$request->comment;
        $comment->save();

        return redirect()->back();
    }

    public function reply(Request $request){

        $reply = new Reply;
        $reply->name=Auth::user()->name;
        $reply->user_id=Auth::user()->id;
        $reply->comment_id=$request->commentId;
        $reply->reply=$request->reply;
        $reply->save();

        return redirect()->back();
    }
    public function comments(){
        $comments=Comment::orderby('id','desc')->get();
        $reply=Reply::all();


        return view('User.comment', compact('comments','reply'));
    }
    public function about(){
        return view('user.about');
    }
}

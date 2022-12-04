<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
class paymentController extends Controller
{
    public function pay_cash(){
        $user=Auth::user();
        $user_id=$user->id;
        $cart_data = Cart::where('user_id', '=' , $user_id)->get();
        foreach ($cart_data as $c_d) {
            $order = new Order;
            $order->name=$c_d->name;
            $order->email=$c_d->email;
            $order->phone=$c_d->phone;
            $order->address=$c_d->address;
            $order->user_id = $c_d->user_id;
            $order->product_title = $c_d->product_title;
            $order->price=$c_d->price;
            $order->image=$c_d->image;
            $order->product_id=$c_d->id;
            $order->quantity=$c_d->quantity;
            $order->payment_status='cash on delivery';
            $order->delivery_status='proccessing';
            $order->save();
            $cart_id=$c_d->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('pay_message','Thank you!, your order is saved Successfully');
    }
    public function stripe($total_price){
        return view('User.payment.stripe',compact('total_price'));
    }

    public function stripePost(Request $request,$total_price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => $total_price * 25,

            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);
        $user=Auth::user();
        $user_id=$user->id;
        $cart_data = Cart::where('user_id', '=' , $user_id)->get();
        foreach ($cart_data as $c_d) {

            $order = new Order;
            $order->name = $c_d->name;
            $order->email = $c_d->email;
            $order->phone = $c_d->phone;
            $order->address = $c_d->address;
            $order->user_id = $c_d->user_id;
            $order->product_title = $c_d->product_title;
            $order->price = $c_d->price;
            $order->image = $c_d->image;
            $order->product_id = $c_d->id;
            $order->quantity = $c_d->quantity;
            $order->payment_status = 'paid';
            $order->delivery_status = 'proccessing';
            $order->save();
            $cart_id = $c_d->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        $total_price=0;
         Session::flash('success', 'Payment successful!');

        return redirect(route('cart'))->with('paid',"Payment successful!");

    }
}


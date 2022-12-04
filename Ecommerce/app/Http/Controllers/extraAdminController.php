<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Notifications\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Notification;
class extraAdminController extends Controller
{
    use Notifiable;
    public function send_email($id){
        $order=Order::find($id);

        return view('admin.email_info',compact('order'));
    }
    public function send_email_info(Request $request,$id){
        $order=Order::find($id);
        $details=[
            'greeting'=>$request->greating,
            'firisting'=>$request->firisting,
            'body'=>$request->body,
            'button'=>$request->button,
            'url'=>$request->url,
            'last_line'=>$request->last_line,
        ];
        Notification::send($order,new sendEmail($details));
        return redirect()->back()->with('message','Email is sent successfully');
    }
    public function search_order(Request $request){
        $data=$request->search;
        $orders =Order::where('name','LIKE','%'.$data.'%')->orWhere('phone',
            'LIKE','%'.$data.'%')
            ->get();
        return view('admin.order_search',compact('orders'));
    }
}

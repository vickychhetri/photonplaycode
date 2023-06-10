<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderStatusMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
class OrderController extends Controller
{

    public function generateInvoice(Request $request,$id)
    {
        $order=Order::find($id);
        $pdf = PDF::loadView('reports.invoice',['id' => $id]);
        return $pdf->download('order'.$order->order_number.'.pdf');
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function change_status_order(Request $request, $id){
        $order=Order::find($id);
        $userEmail = Customer::where('id', $order->user_id)->value('email');
        if(isset($request->status)){
            $order->delivery_status=$request->status;
            $order->save();
            $body = [
                'message' => $request->status,
                'order_number' => $order->order_number,
            ];
            Mail::to($userEmail)->send(new OrderStatusMail($body));
            return response()->json([
                "success"=>true,
                "status"=>$request->status,
                "message"=>"Status Updated",
            ]);
        }

        return response()->json([
            "success"=>false,
            "status"=>'error',
            "message"=>"Sorry, unable to change status !",
        ]);

    }


    public function index(Request $request){
        $orders=Order::with(['orderedProducts','user'])->orderBy('id', 'desc')->get();

        $Sr=1;
        return view('order.index',compact('orders','Sr'));
    }
    public function show(Request $request,$id){
        $order=Order::with(['orderedProducts','user'])->find($id);
        foreach($order->orderedProducts as $prd){
         $prd["title"]=Product::find($prd->product_id)->title;
         $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
        }

//        return $order;

        return view('order.show',compact('order'));
    }

    public function changeOrderStatus(Request $request){
        dd($request->all());
    }
}

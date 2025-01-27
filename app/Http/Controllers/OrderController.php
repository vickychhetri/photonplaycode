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

    public function generateCustomerInvoice(Request $request, $id)
    {
        if($request->download=="Y") return $this->downloadCustomerInvoice($request, $id);

        try {
            $order = Order::find($id);
            if (!$order) {
                return response()->json(['error' => 'Order not found'], 404);
            }

            $pdf = PDF::loadView('reports.invoice_customer', ['id' => $id]);

            // Stream the PDF in the browser
            return $pdf->stream('order' . $order->order_number . '.pdf');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    /***
    * Below two function is for view and download separate
     */
    public function viewCustomerInvoice(Request $request, $id)
    {
        try {
            $order = Order::find($id);
            if (!$order) {
                return response()->json(['error' => 'Order not found'], 404);
            }

            $pdf = PDF::loadView('customer.invoice_customer', ['id' => $id]);

            // Stream the PDF
            return $pdf->stream('order' . $order->order_number . '.pdf');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function downloadCustomerInvoice(Request $request, $id)
    {
        try {
            $order = Order::find($id);
            if (!$order) {
                return response()->json(['error' => 'Order not found'], 404);
            }

            $pdf = PDF::loadView('reports.invoice_customer', ['id' => $id]);

            // Download the PDF
            return $pdf->download('order' . $order->order_number . '.pdf');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
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
                'id' => $order->id,
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
        $orders=Order::with(['orderedProducts','user'])->where('payment_complete',1)->orderBy('id', 'desc')->get();

        $Sr=1;
        return view('order.index',compact('orders','Sr'));
    }
    public function show(Request $request,$id){
        $order=Order::with(['orderedProducts','user'])->find($id);
        foreach($order->orderedProducts as $prd){
         $prd["title"]=Product::find($prd->product_id)->title;
         $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
        }

    //    dd($order);

        return view('order.show',compact('order'));
    }


    public function updateTracking(Request $request, $id)
    {
        $request->validate([
            'estimated_delivery_date' => 'nullable|date',
            'carrier_name' => 'nullable|string|max:255',
            'tracking_number' => 'nullable|string|max:255',
            'tracking_url' => 'nullable|string',
            'shipping_status' => 'nullable|string|in:Pending,In Transit,Delivered',
        ]);

        $order = Order::findOrFail($id);

        $order->update([
            'estimated_delivery_date' => $request->estimated_delivery_date,
            'carrier_name' => $request->carrier_name,
            'tracking_number' => $request->tracking_number,
            'tracking_url' => $request->tracking_url,
            'shipping_status' => $request->shipping_status,
        ]);

        return redirect()->back()->with('success', 'Tracking details updated successfully.');
    }



    public function changeOrderStatus(Request $request){
        dd($request->all());
    }
}

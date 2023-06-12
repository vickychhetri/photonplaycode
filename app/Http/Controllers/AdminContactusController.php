<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Inquery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminContactusController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request){
            $records=Inquery::get();
            $Sr=1;
            return  view('contact_us.index',compact('records','Sr'));
   }



    public function show(Request  $request,$id){
        $record=Inquery::find($id);
        return  view('contact_us.show',compact('record'));
    }

    public function change_status(Request  $request,$id){
        $record=Inquery::find($id);
        $OPEN_STATUS=1;
        if($record->status=="Open"){
            $OPEN_STATUS=0;
            $record->status="Closed";
            $record->save();
            //closed
        }
        else if($record->status=="Closed"){
            $record->status="Open";
            $record->save();
            //Open
        }
        return back()->with('success', 'Status changed successfully !');

    }


    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $item=Inquery::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Inquiry deleted successfully!',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }

}

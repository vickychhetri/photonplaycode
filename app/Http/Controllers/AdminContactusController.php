<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Inquery;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class AdminContactusController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $query = Inquery::query();

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'LIKE', "%{$search}%")
                    ->orWhere('country', 'LIKE', "%{$search}%")
                    ->orWhere('id', 'LIKE', "%{$search}%")
                    ->orWhere('subject', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }

        $records = $query->orderBy('id', 'DESC')->paginate(10); // Adjust records per page

        if ($request->ajax()) {
            return response()->json([
                'html' => view('contact_us._table', compact('records'))->render(),
                'pagination' => (string) $records->links()
            ]);
        }

        return view('contact_us.index', compact('records'));
    }



    public function show(Request  $request,$id){
        $record=Inquery::find($id);
        return  view('contact_us.show',compact('record'));
    }


    public function bulkDelete(Request $request) {
        $ids = $request->input('ids');
        if ($ids) {
            Inquery::whereIn('id', $ids)->delete();
        }
        return response()->json(['success' => true]);
    }

    public function deleteAll(Request $request) {
        Inquery::truncate();
        return response()->json(['success' => true]);
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

//    public function downloadPdf($id) {
//        $record = Inquery::find($id);
//
//        $pdf = PDF::loadView('contact_us.pdf', compact('record'));
//
//        return $pdf->download('inquiry_'.$record->id.'.pdf');
//    }

    public function downloadPdf($id) {
        $record = Inquery::find($id);

        $pdf = new Mpdf(['mode' => 'utf-8']);
        $pdf->WriteHTML(view('contact_us.pdf', compact('record'))->render());

        return $pdf->Output('inquiry_'.$record->id.'.pdf', 'D');
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

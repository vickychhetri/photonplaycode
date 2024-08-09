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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;

class AdminContactusController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $pageSize = $request->input('page_size', 10); // Default to 10 if not set
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

        $records = $query->orderBy('id', 'DESC')->paginate($pageSize); // Adjust records per page

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

    public function showPieAndTrendChart()
    {
        // Query to get the counts of open and closed inquiries
        $inquiryData = Inquery::select(
            DB::raw('status'),
            DB::raw('count(*) as total')
        )
            ->groupBy('status')
            ->pluck('total', 'status')->all();

        // Prepare data for the pie chart
        $chartData = [
            'open' => $inquiryData['Open'] ?? 0,
            'closed' => $inquiryData['Closed'] ?? 0,
        ];

        // Get data for the last three months
        $trendData = Inquery::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
            DB::raw('count(*) as total')
        )
            ->where('created_at', '>=', now()->subMonths(3))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')->all();

        // Prepare trend data
        $months = [];
        $inquiries = [];
        foreach ($trendData as $month => $total) {
            $months[] = $month;
            $inquiries[] = $total;
        }

        // Get country-wise inquiry data
        $countryData = Inquery::select(
            DB::raw('country'),
            DB::raw('count(*) as total')
        )
            ->groupBy('country')
            ->orderBy('total', 'desc')
            ->pluck('total', 'country')->all();

        // Prepare country-wise data
        $countries = array_keys($countryData);
        $inquiriesByCountry = array_values($countryData);

        return view('contact_us.pie_trend_country', compact('chartData', 'months', 'inquiries', 'countries', 'inquiriesByCountry'));
    }




    public function inquiryMonthWise()
    {
        $data = Inquery::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->get();

        $labels = $data->map(function($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT); // e.g., "2023-01"
        });

        $values = $data->pluck('count');

        return view('contact_us.month_wise_inquiries', compact('labels', 'values'));
    }


}

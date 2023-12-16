<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

class ReportController extends Controller
{
    public function report()
    {
        try {
            return view('report.report');
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function daterange(Request $request)
    {
        try {
            $array = explode("@", $request->dateRangehid);
            $startDate = $array[0];
            $endDate = $array[1];

            $data = DB::table('upload_data')
                ->select("*")
                ->whereRaw('DATE(upload_data.created_at) BETWEEN ? AND ?', [date('Y-m-d', strtotime($startDate)), date('Y-m-d', strtotime($endDate))])
                ->get();

            return view('report.report', compact('data'));
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }
}
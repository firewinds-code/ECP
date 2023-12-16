<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Imports\ImportData;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Exception;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Exports\ExportData;
use App\Models\UploadData;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use App\Http\Controllers\Controller;
use App\Imports\Sample;


class DataController extends Controller
{
    public function index()
    {
        try {
            return view('uploaddata.excel');
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function import(Request $request)
    {
        try {
            $beforeCount = UploadData::count();
            Excel::import(new ImportData, $request->file('file'));
            $afterCount = UploadData::count();
            $importedCount = $afterCount - $beforeCount;
            return redirect()->back()->with('success', "$importedCount data records imported successfully.");
        } catch (Exception $e) {
            dd($e->getMessage());
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function export()
    {
        try {
            return Excel::download(new ExportData(), 'format.csv');
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }
}
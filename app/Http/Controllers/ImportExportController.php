<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    //
    public function index () {
        // dd('asda');
        return view('importExport.index');
    }

    public function import(Request $request) {
        $column = Excel::toArray(new ExcelImport, $request->file('excel_file'));
        $data =  $column[0];

        $dataRaw=[];
        foreach($data as $item){
            if($item[0]!=null){
                array_push($dataRaw,$item);
            }

        }

        foreach ($dataRaw as $row) {
            
        }
        dd($dataRaw);
    }

    public function export () {
        return Excel::download(new ExcelExport, 'exported_data.xlsx');
    }
}

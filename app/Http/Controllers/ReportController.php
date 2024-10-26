<?php

namespace App\Http\Controllers;

use App\Models\Report as ModelReport;
use Illuminate\Http\Request as HttpRequest;

class ReportController extends Controller
{
    public function index(){
        $reports=ModelReport::all();
        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report){
        $report->delete();
        return redirect()->back();
    }
}

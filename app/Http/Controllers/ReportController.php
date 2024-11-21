<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request as HttpRequest;

class ReportController extends Controller
{
    public function index(){
        $reports=Report::where('user_id', Auth::user()->id)
        ->get();
        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report){
        $report->delete();
        return redirect()->back();
    }

    public function store(HttpRequest $request, Report $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            'user_id'=>'foreignId',
            'status_id'=>'foreignId',
        ]);

        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report){
        return view('report.show', compact('report'));
    }

    public function update(HttpRequest $request, Report $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            'user_id'=>'foreignId',
            'status_id'=>'foreignId',
        ]);

        $report->update($data);
        return redirect()->back();
    }
}
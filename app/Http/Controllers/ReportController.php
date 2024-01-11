<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    // this controller will display the mainpage of report
    public function mainpage(){
        $report_data = \App\Models\ReportModel::all();
        return view('ManageReport.ReportMainPage',['report_data'=> $report_data]);
    }

    // this controller will create new report
    public function create(Request $request){
        \App\Models\ReportModel::create($request->all());
        return redirect('/reportdata')->with('success','New Report Successfully Added');
    }

    // this controller will retrieve report id and display it
    public function view($id){
        $report_data = \App\Models\ReportModel::find($id);
        return view('ManageReport.ViewReportForm',['report_data'=> $report_data]);
    }

    // this controller will retrieve report id and display it to user for edit
    public function edit($id){
        $report_data = \App\Models\ReportModel::find($id);
        return view('ManageReport.EditReportForm',['report_data'=> $report_data]);
    }

    // this controller will update report
    public function update(Request $request, $id){
        $report_data = \App\Models\ReportModel::find($id);
        $report_data->update($request->all());
        return redirect('/reportdata')->with('success','Report has been Updated');
    }

    // this controller will delete report
    public function delete($id){
        $report_data = \App\Models\ReportModel::find($id);
        $report_data->delete($report_data);
        return redirect('/reportdata')->with('success','Report has been Deleted');
    }
}

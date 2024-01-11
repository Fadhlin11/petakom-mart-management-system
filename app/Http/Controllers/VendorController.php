<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    // this controller will display the mainpage of report
    public function mainpage(){
        $vendor_data = \App\Models\VendorModel::all();
        return view('ManageVendor.VendorMainPage',['vendor_data'=> $vendor_data]);
    }
        
    // this controller will create new vendor
    public function create(Request $request){
        \App\Models\VendorModel::create($request->all());
        return redirect('/vendordata')->with('success','New Vendor Successfully Added');
    }

    // this controller will retrieve vendor id and display it
    public function view($id){
        $vendor_data = \App\Models\VendorModel::find($id);
        return view('ManageVendor.ViewVendorForm',['vendor_data'=> $vendor_data]);
    }

    // this controller will retrieve vendor id and display it to user for edit
    public function edit($id){
        $vendor_data = \App\Models\VendorModel::find($id);
        return view('ManageVendor.EditVendorForm',['vendor_data'=> $vendor_data]);
    }

    // this controller will update vendor
    public function update(Request $request, $id){
        $vendor_data = \App\Models\VendorModel::find($id);
        $vendor_data->update($request->all());
        return redirect('/vendordata')->with('success','Vendor has been Updated');
    }

    // this controller will delete vendor
    public function delete($id){
        $vendor_data = \App\Models\VendorModel::find($id);
        $vendor_data->delete($vendor_data);
        return redirect('/vendordata')->with('success','Data has been Deleted');
    }
}

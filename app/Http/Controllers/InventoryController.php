<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // controller will direct to mainpage
    public function mainpage(){
        $inventory_data = \App\Models\InventoryModel::all();
        return view('ManageInventory.InventoryMainPage',['inventory_data'=> $inventory_data]);
    }
    // controller for add item
    public function create(Request $request){
        \App\Models\InventoryModel::create($request->all());
        return redirect('/inventorydata')->with('success','New Inventory Successfully Added');
    }
// controller for view the item registered
    public function view($id){
        $inventory_data = \App\Models\InventoryModel::find($id);
        return view('ManageInventory.ViewRemainingItem',['inventory_data'=> $inventory_data]);
    }
// controller for edit the data
    public function edit($id){
        $inventory_data = \App\Models\InventoryModel::find($id);
        return view('ManageInventory.UpdateItem',['inventory_data'=> $inventory_data]);
    }
    // controller for update the item
    public function update(Request $request, $id){
        $inventory_data = \App\Models\InventoryModel::find($id);
        $inventory_data->update($request->all());
        return redirect('/inventorydata')->with('success','Inventory has been Updated');
    }
// controller for delete the data registered
    public function delete($id){
        $inventory_data = \App\Models\InventoryModel::find($id);
        $inventory_data->delete($inventory_data);
        return redirect('/inventorydata')->with('success','Data has been Deleted');
    }
}

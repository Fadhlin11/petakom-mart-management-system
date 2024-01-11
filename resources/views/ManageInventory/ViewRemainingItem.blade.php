<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
        <div class="card" style="width: 60%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Inventory Information</h2></div>
            <div class="card-body">
                <div class="modal-body">
                        <!-- get product name from database -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input name="ItemName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$inventory_data->ItemName}}" readonly>
                        </div>

                        <!-- get item quantity from database -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            <input name="ItemQuantity" type="integer" class="form-control" id="exampleFormControlInput1" value="{{$inventory_data->ItemQuantity}}" readonly>
                        </div>

                        <!-- get item price from database -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input name="ItemPrice" type="double" class="form-control" id="exampleFormControlInput1" value="{{$inventory_data->ItemPrice}}" readonly>
                        </div>

                        <!-- get item expiry date from database -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expiry Date</label>
                            <input name="ItemExpiryDate" type="date" class="form-control" id="exampleFormControlInput1" value="{{$inventory_data->ItemExpiryDate}}" readonly>
                        </div>

                        <!-- get item latest update from database -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Latest Update</label>
                            <input name="ItemDateUpdated" type="date" class="form-control" id="exampleFormControlInput1" value="{{$inventory_data->ItemDateUpdated}}" readonly>
                        </div>

                        <!-- button for back to mainpage -->
                    </div>
                    <a href="/inventorydata" class="btn btn-success" title="Back to Index"><i class="fa fa-plus" aria-hidden="true"></i>BACK</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</x-app-layout>
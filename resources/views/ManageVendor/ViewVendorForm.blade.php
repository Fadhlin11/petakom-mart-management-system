<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendor Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="card" style="width: 60%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Details of Vendors</h2></div>
            <div class="card-body">
                <div class="modal-body">

                        <!-- Name field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input name="Name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Name}}" readonly>
                        </div>
                        <!-- Phone field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input name="Phone" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Phone}}" readonly>
                        </div>

                        <!-- Email field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="Email" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Email}}" readonly>
                        </div>

                        <!-- Address field -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea name="Address" class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$vendor_data->Address}}</textarea>
                        </div>

                        <!-- Items field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product</label>
                            <input name="Items" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Items}}" readonly>
                        </div>

                        <!-- Price field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input name="Price" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Price}}" readonly>
                        </div>

                        <!-- Others field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Other Information</label>
                            <input name="Others" type="text" class="form-control" id="exampleFormControlInput1" value="{{$vendor_data->Others}}" readonly>
                        </div>

                    </div>

                    <!-- button back -->
                    <a href="/vendordata" class="btn btn-success" title="Back to Index"><i class="fa fa-plus" aria-hidden="true"></i>BACK</a>
                
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>


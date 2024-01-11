<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Vendor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card" style="width: 70%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Vendors Information</h2></div>
            <div class="card-body">
                <div class="modal-body">
                    <form action="/vendordata/{{$vendor_data->id}}/update" method="POST">
                        {{csrf_field()}}

                        <!-- Name field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input name="Name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor name" value="{{$vendor_data->Name}}">
                        </div>

                        <!-- Phone Number field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input name="Phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor phone" value="{{$vendor_data->Phone}}">
                        </div>

                        <!-- Email field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="Email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor email" value="{{$vendor_data->Email}}">
                        </div>

                        <!-- Address field -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea name="Address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter vendor address">{{$vendor_data->Address}}</textarea>
                        </div>

                        <!-- Product field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product</label>
                            <input name="Items" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product name" value="{{$vendor_data->Items}}">
                        </div>

                        <!-- Price field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input name="Price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product price" value="{{$vendor_data->Price}}">
                        </div>

                        <!-- other information field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Other Information</label>
                            <input name="Others" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter any extra info" value="{{$vendor_data->Others}}">
                        </div>

                        <!-- button cancel update -->
                        <a href="/vendordata" class="btn btn-secondary" style="background-color:grey" title="Back to Main Page"><i class="fa fa-plus" aria-hidden="true"></i>CANCEL</a>
                        <button type="submit" class="btn btn-success" style="background-color: green;" >UPDATE</button>

                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</x-app-layout>

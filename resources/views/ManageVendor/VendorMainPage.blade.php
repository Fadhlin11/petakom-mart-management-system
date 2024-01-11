<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">  
            
            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                    {{session('success')}}
                </div>
            @endif

            <div class="row">
                <div style="display: flex; justify-content: center;">
                    <div class="card" style="width: 90%; margin:0 auto;">
                        
                        <div class="card-header"><h2>List of Vendors </h2></div>
                        
                        <div class="card-body">

                            <!-- button manual and generate -->
                            <button class="btn btn-primary" style="background-color: green;" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Vendor</button>
                           
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Product</th>
                                            <th>Price(RM)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vendor_data as $VendorModel)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $VendorModel->Name }}</td>
                                                <td>{{ $VendorModel->Phone }}</td>
                                                <td>{{ $VendorModel->Email }}</td>
                                                <td>{{ $VendorModel->Items }}</td>
                                                <td>{{ $VendorModel->Price }}</td>
                                                <td>
                                                    <!-- button view -->
                                                    <a href="vendordata/{{($VendorModel->id)}}/view"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    
                                                    <!-- button edit  -->
                                                    <a href="vendordata/{{$VendorModel->id}}/edit"><button class="btn btn-info btn-sm" style="background-color: orange;"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>
                                                    
                                                    <!-- DeleteVendorForm -->
                                                    <form method="GET" action="vendordata/{{$VendorModel->id}}/delete" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        
                                                        <!-- button delete -->
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Vendor" style="background-color:red" onclick="return confirm(&quot;Are you sure to delete this report?!&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                    <!-- DeleteVendorForm -->

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- AddVendorForm -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create report manually</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="vendordata/create" method="POST">
                                {{csrf_field()}}
                                
                                <!-- input name -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input name="Name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor name"required>
                                </div>

                                <!-- input Phone -->         
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                    <input name="Phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor phone"required>
                                </div>

                                <!-- input Email -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input name="Email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter vendor email"required>
                                </div>

                                <!-- input Address -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea name="Address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter vendor address"required></textarea>
                                </div>

                                <!-- input Product -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Product</label>
                                    <input name="Items" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product name"required>
                                </div>

                                <!-- input Price -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                                    <input name="Price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product price"required>
                                </div>

                                <!-- input other information -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Other Information</label>
                                    <input name="Others" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter any extra info"required>
                                </div>

                                <!-- Button cancel and create-->
                                <button type="button" class="btn btn-secondary" style="background-color:grey" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success" style="background-color:green">Create</button>
                                
                            </form>
                        </div>
                        
                        <!-- do not let user click submit button/create vendor until all inputs entered-->
                        <script>
                            
                            document.getElementById('vendorForm').addEventListener('submit', function(event) {
                                var inputs = document.querySelectorAll('#vendorForm input[required]');
                                var isFormValid = true;
                                
                                for (var i = 0; i < inputs.length; i++) {
                                    if (inputs[i].value.trim() === '') {
                                        isFormValid = false;
                                        break;
                                    }
                                }
                    
                                if (!isFormValid) {
                                    event.preventDefault();
                                    alert('Please fill in all required fields.');
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
            <!-- AddVendorForm-->

        </div>
    </div>
</x-app-layout>

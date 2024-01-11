<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventory') }}
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
                    <div class="card" style="width: 70%;">
                        <div class="card-header"><h2>Inventory Information</h2></div>
                        <div class="card-body">                                                                                                                                                                                                                                                                                                                                                                                      
                            <button class="btn btn-primary" style="background-color: green;" onclick="openAddModal()">Add New Item</button>
                            @include('ManageInventory.AddNewItem')
                            <script>
                                function openAddModal() {

                                    // Get the modal element by ID
                                    var modal = document.getElementById("AddModal");

                                    // Display the modal
                                    modal.classList.add("show");
                                    modal.style.display = "block";
                                }
                            </script>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Expiry Date</th>
                                            <th>Latest Update</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inventory_data as $InventoryModel)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $InventoryModel->ItemName }}</td>
                                            <td>{{ $InventoryModel->ItemQuantity }}</td>
                                            <td>{{ $InventoryModel->ItemPrice }}</td>
                                            <td>{{ $InventoryModel->ItemExpiryDate }}</td>
                                            <td>{{ $InventoryModel->ItemDateUpdated }}</td>
                                            <td>
                                                <!-- button for view the item registered -->
                                                <a href="inventorydata/{{($InventoryModel->id)}}/view"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <!-- button for edit the item -->
                                                <a href="inventorydata/{{$InventoryModel->id}}/edit"><button class="btn btn-info btn-sm" style="background-color: orange;"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>
                                                <!-- button for delete the item -->
                                                <form method="GET" action="inventorydata/{{$InventoryModel->id}}/delete" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" style="background-color:red" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
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
        </div>
    </div>
</x-app-layout>

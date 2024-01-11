<!-- Modal -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Add New Items Information</h4>
            </div>

            <div class="modal-body">
                <form action="inventorydata/create" method="POST">
                    {{csrf_field()}}

                    <!-- input fill for product name -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                        <input name="ItemName" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name"required>
                    </div>
                     
                    <!-- input fill for item quantity -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input name="ItemQuantity" type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Quantity"required>
                    </div>

                    <!-- input fill for item price -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input name="ItemPrice" type="double" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price (per item)"required>
                    </div>

                    <!-- input fill for item expiry date -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Expiry Date</label>
                        <input name="ItemExpiryDate" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Expiry Date"required>
                    </div>

                    <!-- input fill for inventory latest update -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Latest Update</label>
                        <input name="ItemDateUpdated" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Latest Update"required>
                    </div>

                    <!-- button for submit -->
                    <button type="submit" class="btn btn-success" id="submitButton" style="background-color:green">Submit</button>

                </form>
            </div>

            <!-- button for cancel -->
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" onclick="cancelModal()" data-bs-dismiss="modal">Cancel</button>
            </div>

            <script>
                function cancelModal() {
                    var modal = document.getElementById('AddModal');
                    modal.classList.remove("show");
                    modal.style.display = 'none';
                }
                
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card" style="width: 70%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Vendors Information</h2></div>
            <div class="card-body">
                <div class="modal-body">
                    <form action="/reportdata/{{$report_data->id}}/update" method="POST">
                        {{csrf_field()}}

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                            <input name="Date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Date" value="{{$report_data->Date}}">
                        </div>

                        <!-- type of report field -->
                        <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Type of Report</label>
                                    <select name="Type" class="form-select" aria-label="Default select example">
                                        <option selected>Choose report type</option>
                                        <option value="Weekly" @if($report_data->Type == 'Weekly') selected @endif >Weekly</option>
                                        <option value="Monthly" @if($report_data->Type == 'Monthly') selected @endif >Monthly</option>
                                        <option value="Yearly" @if($report_data->Type == 'Yearly') selected @endif >Yearly</option>
                                    </select>
                        </div>
                        
                        <!-- sales details field -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Sales Details</label>
                            <textarea name="SalesDetails" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Sales Details">{{$report_data->SalesDetails}}</textarea>
                        </div>
                        
                        <!-- total sales field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Sales</label>
                            <input name="Sales" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product price" value="{{$report_data->Sales}}">
                        </div>

                        <!-- button cancel and update -->
                        <a href="/reportdata" class="btn btn-secondary" style="background-color:grey" title="Back to Main Page"><i class="fa fa-plus" aria-hidden="true"></i>CANCEL</a>
                        <button type="submit" class="btn btn-success" style="background-color:green">UPDATE</button>
                    
                    </form>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report') }}
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
                        
                        <div class="card-header"><h2>Report Information</h2></div>
                        
                        <div class="card-body">

                            <!-- button manual and generate -->
                            <button class="btn btn-primary" style="background-color: blue;" data-bs-toggle="modal" data-bs-target="#exampleModal">Manual Report</button>
                            <button class="btn btn-primary" style="background-color: green;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Generate Report</button>

                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Type of Sales</th>
                                            <th>Total Sales(RM)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($report_data as $ReportModel)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ReportModel->Date }}</td>
                                                <td>{{ $ReportModel->Type }}</td>
                                                <td>{{ $ReportModel->Sales }}</td>
                                                <td>
                                                    <!-- button view -->
                                                    <a href="reportdata/{{($ReportModel->id)}}/view"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    
                                                    <!-- button edit -->
                                                    <a href="reportdata/{{$ReportModel->id}}/edit"><button class="btn btn-info btn-sm" style="background-color: orange;"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>
                                                    
                                                    <!-- DeleteReportForm -->
                                                        <!-- button delete -->
                                                    <form method="GET" action="reportdata/{{$ReportModel->id}}/delete" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Vendor" style="background-color:red" onclick="return confirm(&quot;Are you sure to delete this report?!&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                    <!-- DeleteReportForm -->
                                                    
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

            <!-- ManualReportForm-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create report manually</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="reportdata/create" method="POST">
                                {{csrf_field()}}

                                <!-- Input date of report -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                                    <input name="Date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Date"required>
                                </div>

                                <!-- Input type of report -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Type of Report</label>
                                    <select name="Type" class="form-select" aria-label="Default select example">
                                        <option selected>Choose type of report</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>

                                <!-- Input sales details-->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Sales Details</label>
                                    <textarea name="SalesDetails" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Sales Details"></textarea>
                                </div>
                                
                                <!-- Input total sales-->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Total Sales</label>
                                    <input name="Sales" type="double" class="form-control" id="exampleFormControlInput1" placeholder="Enter Total Sales"required>
                                </div>

                                <!-- Button cancel and create-->
                                    <button type="button" class="btn btn-secondary" style="background-color:grey"data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success" style="background-color:green">Create</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ManualReportForm -->

            <!-- GenerateReportForm -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Choose report to be generated</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="reportdata/generate" method="POST">
                                {{csrf_field()}}    

                                <!--Type of report-->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Type of Report</label>
                                    <select name="Type" class="form-select" aria-label="Default select example">
                                        <option selected>Choose type of report</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>

                                <!-- Input start date -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                    <input name="Date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Date"required>
                                </div>

                                <!-- Input end date -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">End Date</label>
                                    <input name="Date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Date"required>
                                </div>

                                <!-- cancel and generate button -->
                                <button type="button" class="btn btn-secondary" style="background-color:grey" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" style="background-color: green;" id="submitButton">Generate</button>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <!-- GenerateReportForm -->

        </div>
    </div>
</x-app-layout>
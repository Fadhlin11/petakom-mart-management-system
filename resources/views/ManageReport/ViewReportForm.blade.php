<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card" style="width: 60%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Report Information</h2></div>
            <div class="card-body">
                <div class="modal-body">

                        <!-- date field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                            <input name="Date" type="text" class="form-control" id="exampleFormControlInput1" value="{{$report_data->Date}}" readonly>
                        </div>

                        <!-- type of sales field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type of Sales</label>
                            <input name="Type" type="text" class="form-control" id="exampleFormControlInput1" value="{{$report_data->Type}}" readonly>
                        </div>

                        <!-- sales details field -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Sales Details</label>
                            <textarea name="SalesDetails" class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$report_data->SalesDetails}}</textarea>
                        </div>

                        <!-- sales field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sales(RM)</label>
                            <input name="Sales" type="text" class="form-control" id="exampleFormControlInput1" value="{{$report_data->Sales}}" readonly>
                        </div>

                    </div>

                    <!-- button back -->
                    <a href="/reportdata" class="btn btn-success btn-sm" title="Back to Index"><i class="fa fa-plus" aria-hidden="true"></i>BACK</a>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>

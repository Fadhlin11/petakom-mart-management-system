<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>
          
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     
            {{-- <form action="{{ route('payment.index') }}" method="GET">
                <input type="text" name="search" placeholder="Search by product name"
                    class="py-2 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-2 rounded">
                    Search
                </button>
            </form> --}}
            {{-- This button will allow the user to add new payment details and direct it to payment form --}}

                <div class="px-3 py-5 mb-3 text-right">
                    <a href="{{ route('payment.create') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-3 px-4 rounded" style="background-color: rgb(106, 246, 99)"> Add New Payment </a>
                </div> 
                
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <div class="px-3 py-5 mb-3 text-right">
                        <a href="{{ route('payment.create') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-3 px-4 rounded"> Add New Payment </a>
                    </div>  --}}
                    {{-- This table will display all the payment data that made by user --}}
                    <table class="w-full max-w-full mb-4 bg-transparent">
                        <tr class="px-4 py-3 text-left">
                            <th class="px-4 py-3 text-left"><h1 style="font-size: 24px;">  List of Sale</h1></th>
                        </tr>
                        <tr>
                            <th class="px-4 py-3 text-left">Payment ID</th>
                            <th class="px-4 py-3 text-left">Person Incharge</th>
                            <th class="px-4 py-3 text-left">Payment Date</th>
                            <th class="px-4 py-3 text-left">Product Name </th>
                            <th class="px-4 py-3 text-left">Quantity Before </th>
                            <th class="px-4 py-3 text-left">Quantity After</th>
                            <th class="px-4 py-3 text-left">Total Sale</th>
                            <th class="px-4 py-3 text-left">Action</th>
                        </tr>
                        @forelse ($payments as $payment )
        
                        <tr class="px-4 py-3 text-left">
                            <td class="px-4 py-3 text-left">{{$payment-> id}} </td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_person_name }}</td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_date}}</td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_product_name}}</td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_quantity_before}}</td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_quantity_after}}</td>
                            <td class="px-4 py-3 text-left">{{$payment-> payment_total_sale}}</td>
                            <td>
                                    <!-- {{-- This button will allow the admin to view the payment details --}} -->
                                    <a href="{{route('payment.view', ['payment' => $payment])}}" class="btn btn-secondary" style="background-color:blue">View</a> 
                                    
                                    <!-- {{-- This button will allow the admin to edit the payment details --}} -->
                                    <a href="{{route('payment.edit', ['payment' => $payment])}}" class="btn btn-secondary" style="background-color:orange">Edit</a> 
                            
                                    <!-- {{-- This button will allow the admin to delete the payment details --}} -->
                                    <form method="post" action="{{route('payment.destroy', ['payment' => $payment])}}" class="inline-block">
                                        @csrf
                                        @method('delete')
                                        <x-danger-button method="post" class="btn btn-danger" style="background-color:red" action="{{route('payment.destroy', ['payment' => $payment])}}" type="submit" onclick="return confirm('Are you sure?')">Delete</x-danger-button>
                                    </form>
                    
                                </td>
                            
                            </tr>
        
                    
                        @empty
        
                        <p>No Payment Details Available</p>
        
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
  </div>
  
  </x-app-layout>
  


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            View Payment Details
        </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
         
              <div class="block w-full overflow-auto scrolling-touch">
                  <form action="{{ route('payment.view', ['payment'=> $payment])}}" method="GET">
                  @csrf
                  @method('GET') 
                        {{-- This section will display the name of person incharge --}}
                      <div class="mt-4">
                          <x-label for="payment_person_name " value="{{ __('Person Incharge:') }}" />
                          <x-input id="payment_person_name" class="block mt-1 w-full" type="text" name="payment_person_name" value="{{$payment->payment_person_name}}" readonly />
                      </div>
                      {{-- This section will display the date of the payment details added --}}
                      <div class="mt-4">
                        <x-label for="payment_date " value="{{ __('Date:') }}" />
                        <x-input id="payment_date" class="block mt-1 w-full" type="date" name="payment_date" value="{{$payment->payment_date}}" readonly />
                      </div>
                      {{-- This section will display the name of the product --}}
                      <div class="mt-4">
                        <x-label for="payment_product_name" value="{{ __('Product Name:') }}" />
                        <x-input id="payment_product_name" class="block mt-1 w-full" type="text" name="payment_product_name" value="{{$payment->payment_product_name}}" readonly />
                      </div>
                      {{-- This section will display the product quantity before --}}
                      <div class="mt-4">
                        <x-label for="payment_quantity_before " value="{{ __('Quantity Before:') }}" />
                        <x-input id="payment_quantity_before" class="block mt-1 w-full" type="number" name="payment_quantity_before" value="{{$payment->payment_quantity_before}}" readonly />
                      </div>
                      {{-- This section will display the product quatity after sale --}}
                      <div class="mt-4">
                        <x-label for="payment_quantity_after " value="{{ __('Quantity After:') }}" />
                        <x-input id="payment_quantity_after" class="block mt-1 w-full" type="number" name="payment_quantity_after" value="{{$payment->payment_quantity_after}}" readonly />
                      </div>
                      {{-- This section will display the price of one product --}}
                      <div class="mt-4">
                        <x-label for="payment_item_price " value="{{ __('Price per item:') }}" />
                        <x-input id="payment_item_price" class="block mt-4 w-full" type="double" name="payment_item_price" value="{{$payment->payment_item_price}}" readonly />
                      </div>
                      {{-- This section will display the total sale  --}}
                      <div class="mt-4">
                        <x-label for="payment_total_sale" value="{{ __('Total Sale:') }}" />
                        <x-input id="payment_total_sale" class="block mt-4 w-full" type="double" name="payment_total_sale" value="{{$payment->payment_total_sale}}" readonly />
                      </div>
                      {{-- This is the button back that will redirect the user to the payment interface --}}
                      <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('payment.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-3 px-4 rounded" style="background-color: rgb(119, 197, 249)">Back</a> 
                          
                      </div>
                  </form>
              </div>
   
      </div>
  </div>
  </x-app-layout>
  
  
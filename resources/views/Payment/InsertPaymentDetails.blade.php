<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          New Payment Details
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block w-full overflow-auto scrolling-touch">
                <form action="{{ route('payment.store') }}" method="POST">
                @csrf
                    {{-- This section will allow the user to insert the name of person incharge --}}
                    <div class="mt-4">
                        <x-label for="payment_person_name " value="{{ __('Person Incharge:') }}" />
                        <x-input id="payment_person_name" class="block mt-1 w-full" type="text" name="payment_person_name" :value="old('Name')" required />
                    </div>
                    {{-- This section will allow the user to insert the payment date of sale --}}
                    <div class="mt-4">
                      <x-label for="payment_date " value="{{ __('Date:') }}" />
                      <x-input id="payment_date" class="block mt-1 w-full" type="date" name="payment_date" :value="old('Date')" required />
                    </div>
                    {{-- This section will allow the user to insert the name of product --}}
                    <div class="mt-4">
                      <x-label for="payment_product_name" value="{{ __('Product Name:') }}" />
                      <x-input id="payment_product_name" class="block mt-1 w-full" type="text" name="payment_product_name" :value="old('Product')" required />
                    </div>
                    {{-- This section will allow the user to insert payment quantity before sale --}}
                    <div class="mt-4">
                      <x-label for="payment_quantity_before " value="{{ __('Quantity Before:') }}" />
                      <x-input id="payment_quantity_before" class="block mt-1 w-full" type="number" name="payment_quantity_before" :value="old('Before')" required />
                    </div>
                    {{-- This section will allow the user to insert the payment quantity after sale --}}
                    <div class="mt-4">
                      <x-label for="payment_quantity_after " value="{{ __('Quantity After:') }}" />
                      <x-input id="payment_quantity_after" class="block mt-1 w-full" type="number" name="payment_quantity_after" :value="old('After')" required />
                    </div>
                    {{-- This section will allow the user to insert the payment item price --}}
                    <div class="mt-4">
                      <x-label for="payment_item_price " value="{{ __('Price per item:') }}" />
                      <x-input id="payment_item_price" class="block mt-1 w-full" type="double" name="payment_item_price" :value="old('Item')" required />
                    </div>
                    {{-- This section will allow the user to insert the total sale of product --}}
                    <div class="mt-4">
                      <x-label for="payment_total_sale" value="{{ __('Total Sale:') }}" />
                      <x-input id="payment_total_sale" class="block mt-1 w-full" type="double" name="payment_total_sale" :value="old('Total Sale')" required />
                    </div>
                    {{-- This add button will allow the system to store the new payment details --}}
                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-4">
                            {{ __('ADD PAYMENT') }}
                        </x-button>

                    </div>
                    {{-- <button type="submit" >Submit</button> --}}
                </form>
            </div>

    </div>
  </div>
</x-app-layout>


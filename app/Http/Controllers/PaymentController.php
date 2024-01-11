<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
   public function index(){
    $payments= Payment::all();
    return view('payment.PaymentMainPage', ['payments' => $payments]);
   }  //This index controller will direct the user to the main page

   public function create(){
    return view('payment.InsertPaymentDetails');
    } //This create controller will allow the user to view and insert the create payment form

    public function view(Payment $payment){
        return view('payment.ViewPaymentDetails', ['payment'=> $payment]);
    } 

    public function store(Request $request){         
    Payment::create($request->all());
    return redirect('/payment');
    } //This store controller will store the added payment details

    public function edit(Payment $payment){
        return view('payment.EditPaymentDetails', ['payment'=> $payment]);
    } //This edit controller will allow the user to view and edit the edit payment form

    public function update(Payment $payment, Request $request)
    {
    $payment->update($request->all());

    return redirect('/payment');
    } //This update controller will update the updated payment data and redirect to the page of manage payment

    public function destroy(Payment $payment){
        $payment->delete();
        return redirect('/payment')->with('success', "Payment deleted successfully");
    } //This delete controller allow the user to delete the payment data and redirect it to the  page of manage payment
    
}


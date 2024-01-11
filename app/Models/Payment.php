<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payment extends Model //This is payment model
{
    use HasFactory;

    protected $fillable =[
        'payment_person_name',
        'payment_date',
        'payment_product_name',
        'payment_quantity_before',
        'payment_quantity_after',
        'payment_item_price',
        'payment_total_sale'
    ]; //This payment model will store the data into database
}

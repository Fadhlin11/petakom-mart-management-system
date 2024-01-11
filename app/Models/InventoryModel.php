<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//this is model for inventory
class InventoryModel extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $fillable = ['ItemName','ItemQuantity','ItemPrice','ItemExpiryDate','ItemDateUpdated'];

}

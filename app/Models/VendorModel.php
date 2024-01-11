<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorModel extends Model
{
    use HasFactory;
    protected $table = 'vendor'; //table name
    protected $fillable = ['Name','Phone','Email','Address','Items','Price','Others']; //list of attribute in vendor table
}

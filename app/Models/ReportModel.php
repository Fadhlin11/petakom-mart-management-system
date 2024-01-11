<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    use HasFactory;
    protected $table = 'report'; //table name
    protected $fillable = ['Date','Type','SalesDetails','Sales']; //list of attribute in report table
}

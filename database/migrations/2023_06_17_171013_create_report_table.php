<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //list of attribute in report table
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->string('Type');
            $table->string('SalesDetails');
            $table->double('Sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};

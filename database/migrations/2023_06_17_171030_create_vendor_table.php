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
        //list of attribute in vendor table
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Phone');
            $table->string('Email');
            $table->string('Address');
            $table->string('Items');
            $table->double('Price');
            $table->string('Others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};

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
        Schema::create('addtours', function (Blueprint $table) {
            $table->id();
            $table->string('Listing_title');
            $table->string('Category');
            $table->string('City');
            $table->string('Address');
            $table->string('State');
            $table->string('Zip_code');
            $table->string('upload_Gallery')->nullable(); // If you want it to be nullable
            $table->string('Description');
            $table->string('Phone');
            $table->string('Website');
            $table->string('Email');
            $table->string('Price_title');
            // $table->string('Price_description');
            $table->string('Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtours');
    }
};

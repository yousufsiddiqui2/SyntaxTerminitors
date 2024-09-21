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
        Schema::create('customizes', function (Blueprint $table) {
            $table->id();
            $table->String("Destination");
            $table->String("Days");
            $table->String("Start_date");
            $table->String("End_date");
            $table->String("Travelmode");
            $table->String("Vehicle");
            $table->String("Total_persons");
            $table->String("Adults");
            $table->String("Children");
            $table->String("Totalrooms");
	        $table->String("Departure_location");
            $table->String("Tour_guide");
            $table->String("Group_category");
            $table->String("Services");
            $table->String("Requirements");
	        $table->String("Full_name");
            $table->String("Email_address");
            $table->String("WhatsApp_number");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customizes');
    }
};

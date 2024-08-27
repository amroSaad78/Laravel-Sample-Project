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
        Schema::create('trip_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dep_cities_id')->constrained('dep_cities');
            $table->foreignId('ariv_cities_id')->constrained('ariv_cities');
            $table->foreignId('trip_types_id')->constrained('trip_types');
            $table->foreignId('car_types_id')->constrained('car_types');
            $table->integer("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_data');
    }
};

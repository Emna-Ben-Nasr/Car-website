<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_features', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->primary();
            $table->tinyInteger('abs');
            $table->tinyInteger('air_conditioning');
            $table->tinyInteger('power_windows');
            $table->tinyInteger('power_door_locks');
            $table->tinyInteger('cruise_control');
            $table->tinyInteger('blutooth_connectivity');
            $table->tinyInteger('remote_star');
            $table->tinyInteger('gps_navigation');
            $table->tinyInteger('heated_seats');
            $table->tinyInteger('climate_control');
            $table->tinyInteger('rear_parking_sensors');
            $table->tinyInteger('leather_seats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};

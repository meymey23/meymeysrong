<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('property_id');
        $table->date('check_in');
        $table->date('check_out');
        $table->integer('guests')->default(1);
        $table->timestamps();

        // Foreign keys
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('reservations');
}


    
    
};

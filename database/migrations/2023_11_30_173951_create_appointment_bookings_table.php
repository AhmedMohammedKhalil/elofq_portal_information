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
        Schema::create('appointment_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acceptable');
            $table->text('notes');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')
            ->references('id')->on('doctors')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')
            ->references('id')->on('patients')
            ->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_bookings');
    }
};

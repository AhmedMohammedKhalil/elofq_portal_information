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
        Schema::create('appointment_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('start_at');
            $table->string('end_at');
            $table->string('type');

            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')
            ->references('id')->on('doctors')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_doctors');
    }
};

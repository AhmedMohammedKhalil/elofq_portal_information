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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('isbn')->nullable();
            $table->string('image')->nullable();
            $table->string('classification_number');
            $table->string('pages_number')->nullable();
            $table->string('book_height')->nullable();
            $table->text('publishing_house')->nullable();
            $table->text('publishing_location')->nullable();
            $table->text('publishing_year')->nullable();
            $table->text('printer_number')->nullable();
            $table->text('subject');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

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
        Schema::create('gallerydetails', function (Blueprint $table) {
            $table->id();
            $table->string('heading'); 
            $table->string('image', 2048)->nullable();
            $table->foreignId('gallery_id')->nullable();   
            $table->foreignId('created_by')->nullable();            
            $table->enum('status', ['Y', 'N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallerydetails');
    }
};

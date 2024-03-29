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
        Schema::create('news_modals', function (Blueprint $table) {
            $table->id();
            $table->string('heading');           
            $table->text('content')->nullable();
            $table->string('days')->nullable();       
            $table->foreignId('created_by')->nullable();
            $table->string('bg_image', 2048);
            $table->enum('status', ['Y', 'N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_modals');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/..._create_activity_images_table.php
public function up()
{
    Schema::create('activity_images', function (Blueprint $table) {
        $table->id();
        $table->foreignId('activity_id')->constrained()->onDelete('cascade');
        $table->string('image_url');
        $table->boolean('is_primary')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_images');
    }
};

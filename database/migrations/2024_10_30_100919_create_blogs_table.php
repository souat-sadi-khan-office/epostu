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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('tag')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('main_image')->nullable();
            $table->text('short_details')->nullable();
            $table->text('details')->nullable();
            $table->string('site_title')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

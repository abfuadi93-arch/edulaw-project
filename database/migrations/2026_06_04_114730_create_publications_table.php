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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type')->nullable();
            $table->string('year')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('file_path')->nullable();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->string('author')->nullable();
            $table->string('file_size')->nullable();
            $table->unsignedInteger('download_count')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};

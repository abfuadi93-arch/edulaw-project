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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->string('rumpun')->nullable();
            $table->string('format')->nullable();
            $table->string('level')->nullable();
            $table->string('duration')->nullable();
            $table->string('poster')->nullable();
            $table->text('summary')->nullable();
            $table->json('learns')->nullable();
            $table->longText('content')->nullable();
            $table->string('speaker')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->date('started_at')->nullable();
            $table->date('ended_at')->nullable();
            $table->string('archive_url')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

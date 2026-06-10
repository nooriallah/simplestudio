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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->foreignId("user_id")->constrained()->cascadeOnDelete();

            $table->string('site_name')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_whatsapp')->nullable();

            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('dribble')->nullable();
            $table->string('behance')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();


            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->text('address')->nullable();
            $table->text('footer_text')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

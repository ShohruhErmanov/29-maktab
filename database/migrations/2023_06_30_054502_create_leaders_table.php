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
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('contact');
            $table->string('acceptance');
            $table->string('image');
            $table->text('biografiya');
            $table->text('majburiyatlar');
            $table->text('faoliyat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaders');
    }
};

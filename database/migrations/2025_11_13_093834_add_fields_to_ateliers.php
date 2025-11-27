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
        Schema::table('ateliers', function (Blueprint $table) {
            $table->string('jour')->default('lundi');
            $table->time('horaire')->default('12:00');
            $table->integer('duree')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ateliers', function (Blueprint $table) {
            $table->dropColumn(['jour', 'horaire', 'duree']);
        });
    }
};
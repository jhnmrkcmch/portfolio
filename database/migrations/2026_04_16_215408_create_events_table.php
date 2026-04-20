<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('event_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
        DB::table('events')->insert([
            'title' => 'Sunday Service',
            'description' => 'Corpus Christi Campus',
            'event_date' => '2025-12-28',
            'start_time' => '09:00:00',
            'end_time' => '10:45:00',
            'category' => 'Services'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

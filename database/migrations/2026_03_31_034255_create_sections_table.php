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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('page'); // home, about
            $table->string('section'); // hero, footer, etc
            $table->string('key'); // identifies specific content inside section
            $table->text('content')->nullable(); // text content
            $table->string('image')->nullable(); // optional image
            $table->timestamps();
        });

    DB::table('sections')->insert([
        [
            'page' => 'team',
            'section' => 'hero',
            'key' => 'title',
            'content' => 'Elder Name',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'page' => 'team',
            'section' => 'hero',
            'key' => 'subtitle',
            'content' => 'Elder Role Example',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};

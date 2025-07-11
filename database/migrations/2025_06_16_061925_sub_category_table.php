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
         Schema::create('sub_category', function (Blueprint $table) {
            $table->id('sub_category_id');
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('category_id'); // foreign key
            $table->foreign('category_id')->references('category_id')->on('category')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

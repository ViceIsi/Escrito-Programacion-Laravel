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
        Schema::create('Post', function(Blueprint $table){
            $table->id();
            $table->string('Title');
            $table->text('Body');
            $table->string('Author');
            $table->timestamps();
            $table->UnsignedBigInteger('fk_ID_Publicity');
            $table->foreign('fk_ID_Publicity')->references('id')->on('Publicity'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Post');
    }
};

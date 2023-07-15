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
        Schema::create('Modification', function(Blueprint $table){
            $table->id();
            $table->string('ModifiedTitle');
            $table->text('ModifiedBody');
            $table->timestamps();
            $table->UnsignedBigInteger('fk_ID_Post');
            $table->foreign('fk_ID_Post')->references('id')->on('Post');
            $table->UnsignedBigInteger('fk_ID_User');
            $table->foreign('fk_ID_User')->references('id')->on('User');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Modification');
    }
};

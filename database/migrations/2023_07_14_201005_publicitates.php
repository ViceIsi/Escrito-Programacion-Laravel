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
        Schema::create('Publicitates', function(Blueprint $table){
            $table->UnsignedBigInteger('fk_ID_Publicity');
            $table->foreign('fk_ID_Publicity')->references('id')->on('Publicity');
            $table->UnsignedBigInteger('fk_ID_User');
            $table->foreign('fk_ID_User')->references('id')->on('User');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Publicitates');
    }
};

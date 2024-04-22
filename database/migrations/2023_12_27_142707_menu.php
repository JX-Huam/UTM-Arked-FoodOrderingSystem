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
        Schema::create('menu', function (Blueprint $table) {
            $table->id('menuID');
            // $table->foreign('owner_ID')->references('ownerID')->on('owner')->onDelete('cascade');
            $table->string('itemName', 50);
            $table->string('description', 100);
            $table->decimal('itemPrice', 10, 2);
            $table->boolean('itemAvail');
            $table->string('itemImage');
            // $table->foreign('category_ID')->references('categoryID')->on('category')->onDelete('cascade');
            


          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};

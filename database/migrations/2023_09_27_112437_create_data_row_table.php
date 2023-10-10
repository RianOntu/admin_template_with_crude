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
        Schema::create('data_row', function (Blueprint $table) {
            $table->id();
            $table->integer('data_type_id');
            $table->string('field');
            $table->string('type');
            $table->string('display_name');
            $table->integer('required');
            $table->integer('browse');
            $table->integer('read');
            $table->integer('edit');
            $table->integer('add');
            $table->integer('delete');
            $table->longText('details')->nullable();
            $table->integer('order');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_row');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('image',255);
            $table->integer('mrp')->length(11)->unsigned();
            $table->integer('sellingprice')->length(11)->unsigned();
            $table->string('shortdescription',160);
            $table->string('net_quantity',50);
            $table->longtext('description');
            $table->string('url',255);
            $table->foreignId('category_id',20)->nullable();
            $table->foreignId('subcate_id',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

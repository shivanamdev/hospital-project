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
        Schema::create('productqueries', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email');
            $table->integer('number')->length(11)->unsigned()->nullable();
            $table->foreignId('product_id',20)->nullable();
            $table->integer('qty')->length(11)->unsigned()->nullable();
            $table->string('msg');
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
        Schema::dropIfExists('productqueries');
    }
};

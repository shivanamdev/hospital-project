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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('web_logo',255);
            $table->string('web_favicon',255);
            $table->string('email',255);
            $table->integer('number')->length(11)->unsigned();
            $table->string('address',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->integer('postal_code')->length(6)->unsigned();
            $table->string('fb_url',255);
            $table->string('insta_url',255);
            $table->string('twitter_url',255);
            $table->string('youtube_url',255);
            $table->string('meta_title',255);
            $table->string('meta_discription',255);
            $table->string('meta_keywords',255);
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
        Schema::dropIfExists('settings');
    }
};

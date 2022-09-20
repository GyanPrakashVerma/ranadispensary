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
        Schema::create('ourteams', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('designation')->nullable();
            $table->string('images')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('google_link')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('delete_status')->default('0');
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
        Schema::dropIfExists('ourteams');
    }
};

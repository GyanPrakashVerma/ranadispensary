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
        Schema::create('consults', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('m_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('foodtype')->nullable();
            $table->string('appetite')->nullable();
            $table->string('physique')->nullable();
            $table->string('constipation')->nullable();
            $table->string('sleeplessness')->nullable();
            $table->string('hypertension')->nullable();
            $table->string('diabetic')->nullable();
            $table->string('ex_urination')->nullable();
            $table->string('noc_emission')->nullable();
            $table->string('premature_ejaculation')->nullable();
            $table->string('s_weakness')->nullable();
            $table->string('v_diseases')->nullable();
            $table->string('intoxicant')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('consults');
    }
};

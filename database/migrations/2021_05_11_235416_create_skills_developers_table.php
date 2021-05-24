<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_developers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills');

            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developers');

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
        Schema::dropIfExists('skills_developers');
    }
}

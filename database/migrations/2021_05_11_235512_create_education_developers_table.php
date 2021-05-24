<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_developers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id')->references('id')->on('education');

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
        Schema::dropIfExists('education_developers');
    }
}

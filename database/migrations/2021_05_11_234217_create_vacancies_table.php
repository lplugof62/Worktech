<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('experienceRequired');
            $table->double('salary');
            $table->string('currency');
            $table->mediumText('descriptionVacancy');
            $table->string('state');
            $table->date('endDate');

            $table->unsignedBigInteger('recruiter_id');
            $table->foreign('recruiter_id')->references('id')->on('recruiters');

            $table->unsignedBigInteger('category_vacancy_id');
            $table->foreign('category_vacancy_id')->references('id')->on('category_vacancies');

            $table->unsignedBigInteger('country_vacancy_id');
            $table->foreign('country_vacancy_id')->references('id')->on('country_vacancies');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}

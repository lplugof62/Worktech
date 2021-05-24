<?php

namespace Database\Seeders;

use App\Models\Candidate;
use \App\Models\Vacancy;
use \App\Models\CategoryVacancy;
use App\Models\Certification;
use App\Models\Country;
use App\Models\CountryVacancy;
use App\Models\Developer;
use App\Models\Education;
use App\Models\EducationDeveloper;
use App\Models\LangDeveloper;
use App\Models\Language;
use App\Models\LevelLang;
use App\Models\Project;
use \App\Models\Recruiter;
use App\Models\Skill;
use App\Models\SkillsDeveloper;
use App\Models\Technology;
use App\Models\TechnologyDeveloper;
use App\Models\TechnologyVacancy;
use Carbon\Factory;
use Database\Factories\TechnologyFactory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Recruiter::factory(10)->create();     
        Developer::factory(10)->create();  
        Country::factory(30)->create();  
        CategoryVacancy::factory(5)->create();
        CountryVacancy::factory(30)->create();
        Vacancy::factory(10)->create();
        Technology::factory(20)->create();
        TechnologyVacancy::factory(20)->create();
        TechnologyDeveloper::factory(20)->create();
        Candidate::factory(10)->create();
        Project::factory(2)->create();
        Skill::factory(20)->create();
        SkillsDeveloper::factory(5)->create();
        Education::factory(10)->create();
        EducationDeveloper::factory(20)->create();
        Certification::factory(20)->create();
        Language::factory(20)->create();
        LevelLang::factory(3)->create();
        LangDeveloper::factory(20)->create();



        
        
        // \App\Models\User::factory(10)->create();
        // Vacancy::factory()->count(20)->create();
        //seeder crea la información falsa de los campos 
    }
}

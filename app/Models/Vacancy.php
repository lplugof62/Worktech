<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function recruiter(){
        return $this->belongsTo(Recruiter::class);
    }

    public function categoryvacancy(){
        return $this->belongsTo(CategoryVacancy::class);
    }

    public function getGetExcerptAttribute(){
        return substr($this->descriptionVacancy,0, 250);
    }

    public function countryvacancy(){
        return $this->belongsTo(CountryVacancy::class);
    }

    public function techsVacancy(){
        return $this->hasMany(TechnologyVacancy::class);
    }

    public function candidate(){
        return $this->hasMany(Candidate::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'experienceRequired',
        'salary',
        'currency',
        'descriptionVacancy',
        'state',
        'endDate',
        'recruiter_id',
        'category_vacancy_id',
        'country_vacancy_id'
    ];
}

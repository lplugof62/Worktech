<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameCompany',
        'descriptionCompany',
        'webSiteCompany',
        'photoCompany',
    ];


    public function vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public function candidate(){
        return $this->hasMany(Candidate::class);
    }

    public function techsDeveloper(){
        return $this->hasMany(TechnologyDeveloper::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }

    public function educationDev(){
        return $this->hasMany(EducationDeveloper::class);
    }

    public function certification(){
        return $this->hasMany(Certification::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experience',
        'aboutme',
        'curriculum',
        'photo',
        'portfolio',
    ];


    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameTech',
    ];


    public function techsVacancy(){
        return $this->hasMany(TechnologyVacancy::class);
    }

    public function techsDeveloper(){
        return $this->hasMany(TechnologyDeveloper::class);
    }
}

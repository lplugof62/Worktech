<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyVacancy extends Model
{
    use HasFactory;

    public function vacancy(){
        return $this->belongsTo(Vacancy::class);
    }

    public function tecnology(){
        return $this->belongsTo(Technology::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'vacancy_id',
        'tech_id'
    ];
}

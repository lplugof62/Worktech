<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public function languageDev(){
        return $this->hasMany(LangDeveloper::class);
    }

    public function levelLang(){
        return $this->hasMany(LevelLang::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'lenguage',
    ];
}

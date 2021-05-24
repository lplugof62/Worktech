<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelLang extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',

        'language_id',
    ];
}

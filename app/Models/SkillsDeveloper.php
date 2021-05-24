<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsDeveloper extends Model
{
    use HasFactory;

    public function skill(){
        return $this->belongsTo(Skill::class);
    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'skill_id',
        'developer_id',
    ];
}

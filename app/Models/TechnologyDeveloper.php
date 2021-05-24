<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyDeveloper extends Model
{
    use HasFactory;

    public function technology(){
        return $this->belongsTo(Technology::class);
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
        
        'technology_id',
        'developer_id'
    ];
}

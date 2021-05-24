<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangDeveloper extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
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
        'language_id',
        'developer_id',
    ];
}

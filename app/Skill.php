<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'value', 'work_id'
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class, 'skill_works');
    }
}
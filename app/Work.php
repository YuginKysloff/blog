<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'site_link', 'github_link'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_works');
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('published', false);
    }
}
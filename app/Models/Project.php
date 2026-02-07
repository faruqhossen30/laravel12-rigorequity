<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    protected $guarded = [];

    protected $appends = ['image_url'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    protected $casts = [
        'completion_date' => 'date',
    ];

    public function setPartnersAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['partners'] = json_encode(array_map('trim', explode(',', $value)));
        } else {
            $this->attributes['partners'] = json_encode($value);
        }
    }

    public function getPartnersAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Storage;

class Project extends Model
{
    protected $fillable = ['name', 'summary', 'link_github', 'link_live', 'description', 'insights',
        'list_image',
        'open_source', 'public', 'slug'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function projectImages(): Project|HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function projectTechnologies(): Project|HasMany
    {
        return $this->hasMany(ProjectTechnology::class);
    }

    protected static function booted(): void
    {
        static::deleting(function ($project) {
            $project->projectImages->each->delete();

            Storage::disk('public')->delete([
                $project->list_image,
            ]);
        });

        static::updating(function ($project) {
            if ($project->isDirty('list_image')) {
                Storage::disk('public')->delete($project->getOriginal('list_image'));
            }
        });
    }

}

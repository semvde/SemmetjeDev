<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\UploadedFile;
use Storage;

class ProjectImage extends Model
{
    protected $fillable = ['project_id', 'image', 'alt_text'];
    protected $touches = ['project'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    protected static function booted(): void
    {
        static::creating(function ($projectImage) {
            if ($projectImage->image instanceof UploadedFile) {
                $projectImage->image = $projectImage->image
                    ->store('projects', 'public');
            }
        });

        static::deleting(function ($projectImage) {
            Storage::disk('public')->delete([
                $projectImage->image,
            ]);
        });
    }
}

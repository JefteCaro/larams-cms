<?php

namespace Jefte\Larams\Traits;

use Jefte\Models\MediaFile;

trait HasMediaFiles
{
    /**
     * Get all of the files for the Eloquent Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->morphMany(MediaFile::class, 'owner');
    }
}

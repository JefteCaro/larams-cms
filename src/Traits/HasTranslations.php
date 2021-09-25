<?php

namespace Jefte\Larams\Traits;

use Jefte\Models\Translation;

trait HasTranslations
{
    /**
     * Get all of the files for the Eloquent Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->morphMany(Translation::class, 'owner');
    }
}

<?php

namespace Jefte\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'larams_comments';

    /**
     * Get the owner that owns the File
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function owner()
    {
        $this->morphTo();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    public function giftable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo(Gift::class, 'giftable');
    }
}

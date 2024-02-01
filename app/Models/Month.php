<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function targets()
    {
        return $this->morphMany(Target::class, 'targetable');
    }

}

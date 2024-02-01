<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

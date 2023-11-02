<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function statuses(){
        return $this->morphedByMany(Status::class, 'taggable');
    }

    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}

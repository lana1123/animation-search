<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animation;

class Tag extends Model
{
    use HasFactory;

    public function animations()
    {
        return $this->belongsToMany(Animation::class);
    }
}

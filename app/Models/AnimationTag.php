<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimationTag extends Model
{
    use HasFactory;

    protected $table = 'animation_tag';

    public $timestamps = false;
}

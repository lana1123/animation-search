<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Animation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeKeyword($query, $keyword)
    {
        if($keyword) {
            return $query->whereHas('tags', function($q) use ($keyword) {
                $q->where('description', 'like','%'.$keyword.'%');
            })->orWhere('style','like','%'.$keyword.'%')
            ->orWhere('name','like','%'.$keyword.'%')->
            orWhereHas('user', function($q) use ($keyword) {
                $q->where('name', 'like','%'.$keyword.'%');
            })->orderBy('created_at','desc');
        }
    }
}

<?php

namespace App\GraphQL\Queries;

use App\Models\User;
use App\Models\Animation;
use App\Models\Tag;

class SearchQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $search = $args['search'];

        // $all_animations = Animation::with('tags')->with('user');

        // $selected = $all_animations->keyword($search)->get();

        // return $selected;

        return Animation::keyword($search)->get();


        // return Animation::whereHas('tags', function($q) use ($search) {
        //     $q->where('description', 'like','%'.$search.'%');
        // })->orWhere('style','like','%'.$search.'%')->orWhereHas('user', function($q) use ($search) {
        //     $q->where('name', 'like','%'.$search.'%');
        // })->orderBy('created_at','desc')->get();
    }
}

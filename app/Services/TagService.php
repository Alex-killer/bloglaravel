<?php


namespace App\Services;


use App\Models\Tag;

class TagService
{
    public function store($data)
    {
        Tag::firstOrCreate($data);
    }

    public function update($tag, $data)
    {
        $tag->update($data);
    }
}
